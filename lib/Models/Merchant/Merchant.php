<?php

namespace Safe2Pay\Models\Merchant;
/**
 * Class Merchant
 *
 * @package Safe2Pay\Models
 */

class Merchant implements \JsonSerializable
{
    private $Name;
    private $CommercialName;
    private $Identity;
    private $ResponsibleName;
    private $ResponsibleIdentity;
    private $Email;
    private $TechName;
    private $TechIdentity;
    private $TechEmail;
    private $Token;
    private $SecretKey;
    private $TokenSandbox;
    private $SecretKeySandbox;
    private $BankData;
    private $Address;
    private $Configuration;
    private $MerchantSplit;
    private $IsRemoved;

    public function getName(){
		return $this->Name;
	}

	public function setName($Name){
		$this->Name = $Name;
	}

	public function getCommercialName(){
		return $this->CommercialName;
	}

	public function setCommercialName($CommercialName){
		$this->CommercialName = $CommercialName;
	}

	public function getIdentity(){
		return $this->Identity;
	}

	public function setIdentity($Identity){
		$this->Identity = $Identity;
	}

	public function getResponsibleName(){
		return $this->ResponsibleName;
	}

	public function setResponsibleName($ResponsibleName){
		$this->ResponsibleName = $ResponsibleName;
	}

	public function getResponsibleIdentity(){
		return $this->ResponsibleIdentity;
	}

	public function setResponsibleIdentity($ResponsibleIdentity){
		$this->ResponsibleIdentity = $ResponsibleIdentity;
	}

	public function getEmail(){
		return $this->Email;
	}

	public function setEmail($Email){
		$this->Email = $Email;
	}

	public function getTechName(){
		return $this->TechName;
	}

	public function setTechName($TechName){
		$this->TechName = $TechName;
	}

	public function getTechIdentity(){
		return $this->TechIdentity;
	}

	public function setTechIdentity($TechIdentity){
		$this->TechIdentity = $TechIdentity;
	}

	public function getTechEmail(){
		return $this->TechEmail;
	}

	public function setTechEmail($TechEmail){
		$this->TechEmail = $TechEmail;
	}

	public function getToken(){
		return $this->Token;
	}

	public function setToken($Token){
		$this->Token = $Token;
	}

	public function getSecretKey(){
		return $this->SecretKey;
	}

	public function setSecretKey($SecretKey){
		$this->SecretKey = $SecretKey;
	}

	public function getTokenSandbox(){
		return $this->TokenSandbox;
	}

	public function setTokenSandbox($TokenSandbox){
		$this->TokenSandbox = $TokenSandbox;
	}

	public function getSecretKeySandbox(){
		return $this->SecretKeySandbox;
	}

	public function setSecretKeySandbox($SecretKeySandbox){
		$this->SecretKeySandbox = $SecretKeySandbox;
	}

	public function getBankData(){
		return $this->BankData;
	}

	public function setBankData($BankData){
		$this->BankData = $BankData;
	}

	public function getAddress(){
		return $this->Address;
	}

	public function setAddress($Address){
		$this->Address = $Address;
	}

	public function getConfiguration(){
		return $this->Configuration;
	}

	public function setConfiguration($Configuration){
		$this->Configuration = $Configuration;
	}

	public function getMerchantSplit(){
		return $this->MerchantSplit;
	}

	public function setMerchantSplit($MerchantSplit){
		$this->MerchantSplit = $MerchantSplit;
	}

	public function getIsRemoved(){
		return $this->IsRemoved;
	}

	public function setIsRemoved($IsRemoved){
		$this->IsRemoved = $IsRemoved;
	}

	public function __construct($Identity,$Name,$CommercialName,$Address,$ResponsibleName ,$ResponsibleIdentity ,$Email ,$TechName, $TechIdentity,$TechEmail,$BankData,$MerchantSplit)
	{
		$this->Name = $Name;
		$this->CommercialName = $CommercialName;
		$this->Identity = $Identity;
		$this->Address = $Address;
		$this->ResponsibleName = $ResponsibleName;
		$this->ResponsibleIdentity = $ResponsibleIdentity;
		$this->Email = $Email;
		$this->TechName = $TechName;
		$this->TechIdentity = $TechIdentity;
		$this->TechEmail = $TechEmail;
		$this->BankData = $BankData;
		$this->MerchantSplit = $MerchantSplit;

	}

	public function JsonSerialize()
    {
        return [
				'Name' => (string) $this->Name,
				'Name' => (string) $this->CommercialName,
				'Identity' =>(string) $this->Identity,
				'ResponsibleName' =>(string) $this->ResponsibleName,
				'ResponsibleIdentity' =>(string) $this->ResponsibleIdentity,
				'Email' =>(string) $this->Email,
				'TechName' =>(string) $this->TechName,
				'TechIdentity' =>(string)  $this->TechIdentity,
				'TechEmail' =>(string) $this->TechEmail,
				'Address' => $this->Address,
				'BankData' => $this->BankData,
				'MerchantSplit' => $this->MerchantSplit
        ];
    }


}