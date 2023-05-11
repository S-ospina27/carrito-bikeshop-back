<?php

namespace Database\Class\Bikeshop;

class Products implements \JsonSerializable {

	private ?int $idproducts = null;
	private ?string $products_name = null;
	private ?string $products_description = null;
	private ?int $products_value = null;
	private ?string $products_path = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function formFields(): Products {
		$products = new Products();

		$products->setIdproducts(
			isset(request->idproducts) ? request->idproducts : null
		);

		$products->setProductsName(
			isset(request->products_name) ? request->products_name : null
		);

		$products->setProductsDescription(
			isset(request->products_description) ? request->products_description : null
		);

		$products->setProductsValue(
			isset(request->products_value) ? request->products_value : null
		);

		$products->setProductsPath(
			isset(request->products_path) ? request->products_path : null
		);

		return $products;
	}

	public function getIdproducts(): ?int {
		return $this->idproducts;
	}

	public function setIdproducts(?int $idproducts): Products {
		$this->idproducts = $idproducts;
		return $this;
	}

	public function getProductsName(): ?string {
		return $this->products_name;
	}

	public function setProductsName(?string $products_name): Products {
		$this->products_name = $products_name;
		return $this;
	}

	public function getProductsDescription(): ?string {
		return $this->products_description;
	}

	public function setProductsDescription(?string $products_description): Products {
		$this->products_description = $products_description;
		return $this;
	}

	public function getProductsValue(): ?int {
		return $this->products_value;
	}

	public function setProductsValue(?int $products_value): Products {
		$this->products_value = $products_value;
		return $this;
	}

	public function getProductsPath(): ?string {
		return $this->products_path;
	}

	public function setProductsPath(?string $products_path): Products {
		$this->products_path = $products_path;
		return $this;
	}

}