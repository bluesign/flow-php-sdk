<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: flow/entities/block_seal.proto

namespace Flow\Entities;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>flow.entities.BlockSeal</code>
 */
class BlockSeal extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes block_id = 1;</code>
     */
    protected $block_id = '';
    /**
     * Generated from protobuf field <code>bytes execution_receipt_id = 2;</code>
     */
    protected $execution_receipt_id = '';
    /**
     * Generated from protobuf field <code>repeated bytes execution_receipt_signatures = 3;</code>
     */
    private $execution_receipt_signatures;
    /**
     * Generated from protobuf field <code>repeated bytes result_approval_signatures = 4;</code>
     */
    private $result_approval_signatures;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $block_id
     *     @type string $execution_receipt_id
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $execution_receipt_signatures
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $result_approval_signatures
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Flow\Entities\BlockSeal::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes block_id = 1;</code>
     * @return string
     */
    public function getBlockId()
    {
        return $this->block_id;
    }

    /**
     * Generated from protobuf field <code>bytes block_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBlockId($var)
    {
        GPBUtil::checkString($var, False);
        $this->block_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes execution_receipt_id = 2;</code>
     * @return string
     */
    public function getExecutionReceiptId()
    {
        return $this->execution_receipt_id;
    }

    /**
     * Generated from protobuf field <code>bytes execution_receipt_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setExecutionReceiptId($var)
    {
        GPBUtil::checkString($var, False);
        $this->execution_receipt_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes execution_receipt_signatures = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExecutionReceiptSignatures()
    {
        return $this->execution_receipt_signatures;
    }

    /**
     * Generated from protobuf field <code>repeated bytes execution_receipt_signatures = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExecutionReceiptSignatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->execution_receipt_signatures = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes result_approval_signatures = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResultApprovalSignatures()
    {
        return $this->result_approval_signatures;
    }

    /**
     * Generated from protobuf field <code>repeated bytes result_approval_signatures = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResultApprovalSignatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->result_approval_signatures = $arr;

        return $this;
    }

}
