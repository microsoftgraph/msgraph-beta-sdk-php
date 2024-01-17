<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcBulkModifyDiskEncryptionType extends CloudPcBulkAction implements Parsable 
{
    /**
     * Instantiates a new cloudPcBulkModifyDiskEncryptionType and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcBulkModifyDiskEncryptionType');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcBulkModifyDiskEncryptionType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcBulkModifyDiskEncryptionType {
        return new CloudPcBulkModifyDiskEncryptionType();
    }

    /**
     * Gets the diskEncryptionType property value. The diskEncryptionType property
     * @return CloudPcDiskEncryptionType|null
    */
    public function getDiskEncryptionType(): ?CloudPcDiskEncryptionType {
        $val = $this->getBackingStore()->get('diskEncryptionType');
        if (is_null($val) || $val instanceof CloudPcDiskEncryptionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'diskEncryptionType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'diskEncryptionType' => fn(ParseNode $n) => $o->setDiskEncryptionType($n->getEnumValue(CloudPcDiskEncryptionType::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('diskEncryptionType', $this->getDiskEncryptionType());
    }

    /**
     * Sets the diskEncryptionType property value. The diskEncryptionType property
     * @param CloudPcDiskEncryptionType|null $value Value to set for the diskEncryptionType property.
    */
    public function setDiskEncryptionType(?CloudPcDiskEncryptionType $value): void {
        $this->getBackingStore()->set('diskEncryptionType', $value);
    }

}
