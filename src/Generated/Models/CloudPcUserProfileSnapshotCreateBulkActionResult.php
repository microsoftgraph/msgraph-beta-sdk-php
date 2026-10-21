<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CloudPcUserProfileSnapshotCreateBulkActionResult extends CloudPcUserProfileBulkActionResult implements Parsable 
{
    /**
     * Instantiates a new CloudPcUserProfileSnapshotCreateBulkActionResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcUserProfileSnapshotCreateBulkActionResult');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcUserProfileSnapshotCreateBulkActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcUserProfileSnapshotCreateBulkActionResult {
        return new CloudPcUserProfileSnapshotCreateBulkActionResult();
    }

    /**
     * Gets the failedCloudProfileIds property value. The failedCloudProfileIds property
     * @return array<string>|null
    */
    public function getFailedCloudProfileIds(): ?array {
        $val = $this->getBackingStore()->get('failedCloudProfileIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedCloudProfileIds'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'failedCloudProfileIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setFailedCloudProfileIds($val);
            },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('failedCloudProfileIds', $this->getFailedCloudProfileIds());
    }

    /**
     * Sets the failedCloudProfileIds property value. The failedCloudProfileIds property
     * @param array<string>|null $value Value to set for the failedCloudProfileIds property.
    */
    public function setFailedCloudProfileIds(?array $value): void {
        $this->getBackingStore()->set('failedCloudProfileIds', $value);
    }

}
