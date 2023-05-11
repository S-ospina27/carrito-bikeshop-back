<?php

namespace Database\Class\Bikeshop;

class Buy implements \JsonSerializable {

	private ?int $idbuy = null;
	private ?int $users_identification_number = null;
	private ?string $idproducts = null;
	private ?string $buy_date = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function formFields(): Buy {
		$buy = new Buy();

		$buy->setIdbuy(
			isset(request->idbuy) ? request->idbuy : null
		);

		$buy->setUsersIdentificationNumber(
			isset(request->users_identification_number) ? request->users_identification_number : null
		);

		$buy->setIdproducts(
			isset(request->idproducts) ? request->idproducts : null
		);

		$buy->setBuyDate(
			isset(request->buy_date) ? request->buy_date : null
		);

		return $buy;
	}

	public function getIdbuy(): ?int {
		return $this->idbuy;
	}

	public function setIdbuy(?int $idbuy): Buy {
		$this->idbuy = $idbuy;
		return $this;
	}

	public function getUsersIdentificationNumber(): ?int {
		return $this->users_identification_number;
	}

	public function setUsersIdentificationNumber(?int $users_identification_number): Buy {
		$this->users_identification_number = $users_identification_number;
		return $this;
	}

	public function getIdproducts(): ?string {
		return $this->idproducts;
	}

	public function setIdproducts(?string $idproducts): Buy {
		$this->idproducts = $idproducts;
		return $this;
	}

	public function getBuyDate(): ?string {
		return $this->buy_date;
	}

	public function setBuyDate(?string $buy_date): Buy {
		$this->buy_date = $buy_date;
		return $this;
	}

}