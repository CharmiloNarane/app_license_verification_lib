package com.example.aaaa.model;

public class SubscriptionModal {

    public String packageName;
    public String purchaseCode;

    //contructor for our variables
    public SubscriptionModal(String packageName, String purchaseCode){
        this.packageName = packageName;
        this.purchaseCode = purchaseCode;
    }

    public void setPackageName(String name){
        this.packageName = name;
    }

    public String getPackageName(){
        return this.packageName;
    }

    public void setPurchaseCode(String code){
        this.purchaseCode = code;
    }

    public String getPurchaseCode(){
        return this.purchaseCode;
    }

}
