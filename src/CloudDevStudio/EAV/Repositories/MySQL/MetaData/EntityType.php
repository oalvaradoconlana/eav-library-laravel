<?php
/**
 * Created by PhpStorm.
 * User: bernardopineda
 * Date: 8/25/15
 * Time: 12:35 AM
 */

namespace CloudDevStudio\EAV;


use Illuminate\Support\Facades\DB;

class EntityType implements EntityTypeInterface
{
    /**
     * Function to get entity structure
     * @param $entityTypeId
     * @return mixed
     */
    public function getMetaData($entityTypeId)
    {

    }

    /**
     * @param $entityTypeId
     * @return mixed
     */
    public function getAttributes($entityTypeId)
    {

    }

    /**
     * Returns true when entity has that attribute related
     * false otherwise
     * @param $entityTypeId
     * @param $attributeName
     * @return mixed
     */
    public function hasAttribute($entityTypeId, $attributeName)
    {

    }

    /**
     * Gets the list of entity types
     * @param array $filters
     * @return mixed
     */
    public function getList($filters = array())
    {

    }
}