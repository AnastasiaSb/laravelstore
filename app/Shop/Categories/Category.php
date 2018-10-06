<?php

namespace App\Shop\Categories;

use App\Models\Model;
/**
 * Created by PhpStorm.
 * User: php
 * Date: 06.10.18
 * Time: 11:02
 */
class Category extends Model
{
    protected $table = 'category';
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $slug;
    /**
     * @var string
     */
    private $description;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @return int
     */
    public function getSlug()
    {
        return $this->slug;
    }
    /**
     * @param int $status
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }
    /**
     * @return int
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @param int $sort_order
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    protected function toArray()
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'slug' => $this->getSlug(),
            'description' => $this->getDescription(),
        ];
    }
}