package com.example.aaaa;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.JsonArrayRequest;
import com.android.volley.toolbox.Volley;
import com.example.aaaa.model.SubscriptionModal;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;

public class MainActivity extends AppCompatActivity {

    private EditText purchaseCode, packageName;
    private TextView txtResult;
    private Button btnVerify;
    private String purchase_code, result;
    public String package_name, apiUrl;
    private ArrayList<SubscriptionModal> subscriptionModalList;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        subscriptionModalList = new ArrayList<>();

        result = "";
        purchaseCode = findViewById(R.id.edtPurchaseCode);
        packageName = findViewById(R.id.edtPackageName);
        txtResult = findViewById(R.id.txtResult);
        btnVerify = findViewById(R.id.btnVerify);

        btnVerify.setOnClickListener(v -> {
            //getting values filled on validation form to check and comapre with server API data
            package_name = packageName.getText().toString();
            purchase_code = purchaseCode.getText().toString();
            apiUrl = "https://package.evisions.tech/check_validation.php?package_name="+package_name;

            //creating a new variable for our requestQueue
            RequestQueue queue = Volley.newRequestQueue(MainActivity.this);
            // in this case the data we are getting is in the form
            // of array so we are making a json array request.  below is the line where we are making an json array
            // request and then extracting data from each json object.
            JsonArrayRequest jsonArrayRequest = new JsonArrayRequest(Request.Method.GET, apiUrl, null, response -> {
                for (int i = 0; i < response.length(); i++) {
                    //creating  a new Json object and getting each
                    //object from our json array.
                    try {
                        // we are getting each json object.
                        JSONObject responseObj = response.getJSONObject(i);
                        // now we get our response from API in json object format.
                        // in below line we are extracting a string with
                        // its key value from our json object.
                        // similarly we are extracting all the strings from our json object.
                        String apiPackage = responseObj.getString("package_name");
                        String apiPurchaseCode = responseObj.getString("purchase_code");
                        int apiStatus = responseObj.getInt("status");

                        Toast.makeText(MainActivity.this, "status= "+apiStatus+"", Toast.LENGTH_LONG).show();

                        if (apiStatus == 1){
                            if ( apiPackage.equalsIgnoreCase(package_name) && apiPurchaseCode.equalsIgnoreCase(purchase_code)){
                                //subcription status is valid and user inputed data matches with api data
                                Toast.makeText(MainActivity.this, "Match Success",Toast.LENGTH_LONG).show();
                                txtResult.setText("Result: Match Success");
                                subscriptionModalList.add(new SubscriptionModal(apiPackage, apiPurchaseCode));

                                //Send user to Home screen
                                Intent intent = new Intent(this, ValidationResult.class);
                                startActivity(intent);
                            }
                        }else if(apiStatus == 0){
                            Toast.makeText(MainActivity.this, "Inactive Subscription!",Toast.LENGTH_LONG).show();
                            System.exit(1);
                        }else{

                        }

                    } catch (JSONException e) {
                        e.printStackTrace();
                    }
                }

                packageName.setText("");
                purchaseCode.setText("");
                Toast.makeText(MainActivity.this, "No Match!",Toast.LENGTH_LONG).show();
                System.exit(1);
            }, new Response.ErrorListener() {
                @Override
                public void onErrorResponse(VolleyError error) {
                    Toast.makeText(MainActivity.this, "Failed to get API data", Toast.LENGTH_LONG).show();
                }
            });
            queue.add(jsonArrayRequest);
        });

    }


}