<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: flow/entities/block_header.proto

namespace GPBMetadata\Flow\Entities;

class BlockHeader
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
 flow/entities/block_header.protoflow.entities"k
BlockHeader

id (
	parent_id (
height (-
	timestamp (2.google.protobuf.TimestampB(
org.onflow.protobuf.entitiesZentitiesbproto3'
        , true);

        static::$is_initialized = true;
    }
}

