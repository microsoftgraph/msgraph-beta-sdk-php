<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AzureADDevice extends UpdatableAsset implements Parsable 
{
    /**
     * Instantiates a new AzureADDevice and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdates.azureADDevice');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AzureADDevice
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AzureADDevice {
        return new AzureADDevice();
    }

    /**
     * Gets the enrollment property value. The enrollment property
     * @return UpdateManagementEnrollment|null
    */
    public function getEnrollment(): ?UpdateManagementEnrollment {
        $val = $this->getBackingStore()->get('enrollment');
        if (is_null($val) || $val instanceof UpdateManagementEnrollment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollment'");
    }

    /**
     * Gets the errors property value. Specifies any errors that prevent the device from being enrolled in update management or receving deployed content. Read-only. Returned by default.
     * @return array<UpdatableAssetError>|null
    */
    public function getErrors(): ?array {
        $val = $this->getBackingStore()->get('errors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UpdatableAssetError::class);
            /** @var array<UpdatableAssetError>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errors'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enrollment' => fn(ParseNode $n) => $o->setEnrollment($n->getObjectValue([UpdateManagementEnrollment::class, 'createFromDiscriminatorValue'])),
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getCollectionOfObjectValues([UpdatableAssetError::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('enrollment', $this->getEnrollment());
        $writer->writeCollectionOfObjectValues('errors', $this->getErrors());
    }

    /**
     * Sets the enrollment property value. The enrollment property
     * @param UpdateManagementEnrollment|null $value Value to set for the enrollment property.
    */
    public function setEnrollment(?UpdateManagementEnrollment $value): void {
        $this->getBackingStore()->set('enrollment', $value);
    }

    /**
     * Sets the errors property value. Specifies any errors that prevent the device from being enrolled in update management or receving deployed content. Read-only. Returned by default.
     * @param array<UpdatableAssetError>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->getBackingStore()->set('errors', $value);
    }

}
