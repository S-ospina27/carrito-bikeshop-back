<?php

namespace Database\Class\Bikeshop;

class Buys implements \JsonSerializable {

	private ?int $users_identification_number = null;
	private ?string $users_name = null;
	private ?string $products_name = null;
	private ?int $products_value = null;
	private ?string $buy_date = null;
	private ?string $idproducts = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function formFields(): Buys {
		$buys = new Buys();

		$buys->setUsersIdentificationNumber(
			isset(request->users_identification_number) ? request->users_identification_number : null
		);

		$buys->setUsersName(
			isset(request->users_name) ? request->users_name : null
		);

		$buys->setProductsName(
			isset(request->products_name) ? request->products_name : null
		);

		$buys->setProductsValue(
			isset(request->products_value) ? request->products_value : null
		);

		$buys->setBuyDate(
			isset(request->buy_date) ? request->buy_date : null
		);

		$buys->setIdproducts(
			isset(request->idproducts) ? request->idproducts : null
		);

		return $buys;
	}

	public function getUsersIdentificationNumber(): ?int {
		return $this->users_identification_number;
	}

	public function setUsersIdentificationNumber(?int $users_identification_number): Buys {
		$this->users_identification_number = $users_identification_number;
		return $this;
	}

	public function getUsersName(): ?string {
		return $this->users_name;
	}

	public function setUsersName(?string $users_name): Buys {
		$this->users_name = $users_name;
		return $this;
	}

	public function getProductsName(): ?string {
		return $this->products_name;
	}

	public function setProductsName(?string $products_name): Buys {
		$this->products_name = $products_name;
		return $this;
	}

	public function getProductsValue(): ?int {
		return $this->products_value;
	}

	public function setProductsValue(?int $products_value): Buys {
		$this->products_value = $products_value;
		return $this;
	}

	public function getBuyDate(): ?string {
		return $this->buy_date;
	}

	public function setBuyDate(?string $buy_date): Buys {
		$this->buy_date = $buy_date;
		return $this;
	}

	public function getIdproducts(): ?string {
		return $this->idproducts;
	}

	public function setIdproducts(?string $idproducts): Buys {
		$this->idproducts = $idproducts;
		return $this;
	}

}