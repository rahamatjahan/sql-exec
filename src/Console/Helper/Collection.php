<?php

namespace RahamatJahan\SqlExec\Console\Helper;

class Collection {
    public static function mapObjectsToArrays($collection) {
        return array_map(function($object) {
            return (array) $object;
        }, $collection);
    }

    public static function mapObjectsToPropertyValues($collection, $property) {
        return array_map(function($object) use($property) {
            return $object->{$property};
        }, $collection);
    }

    public static function mapArraysToKeyValues($array, $key) {
        return array_map(function($element) use($key) {
            return $element[$key];
        }, $array);
    }
}