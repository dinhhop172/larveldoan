<?php
    namespace App\Repositories;
    use App\Models\ProductBrand;

    class BrandRepository {
        protected $brand;

        public function __construct(ProductBrand $brand)
        {
            $this->brand = $brand;
        }

        public function all(){
            return $this->brand->all();
        }

        public function create($attributes){
            return $this->brand->create($attributes);
        }
    }
?>
