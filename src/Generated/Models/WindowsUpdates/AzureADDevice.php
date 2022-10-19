<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AzureADDevice extends UpdatableAsset implements Parsable 
{
    /**
     * @var array<UpdatableAssetEnrollment>|null $enrollments Specifies areas of the service in which the device is enrolled. Read-only. Returned by default.
    */
    private ?array $enrollments = null;
    
    /**
     * @var array<UpdatableAssetError>|null $errors Specifies any errors that prevent the device from being enrolled in update management or receving deployed content. Read-only. Returned by default.
    */
    private ?array $errors = null;
    
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
     * Gets the enrollments property value. Specifies areas of the service in which the device is enrolled. Read-only. Returned by default.
     * @return array<UpdatableAssetEnrollment>|null
    */
    public function getEnrollments(): ?array {
        return $this->enrollments;
    }

    /**
     * Gets the errors property value. Specifies any errors that prevent the device from being enrolled in update management or receving deployed content. Read-only. Returned by default.
     * @return array<UpdatableAssetError>|null
    */
    public function getErrors(): ?array {
        return $this->errors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enrollments' => fn(ParseNode $n) => $o->setEnrollments($n->getCollectionOfObjectValues([UpdatableAssetEnrollment::class, 'createFromDiscriminatorValue'])),
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getCollectionOfObjectValues([UpdatableAssetError::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('enrollments', $this->enrollments);
        $writer->writeCollectionOfObjectValues('errors', $this->errors);
    }

    /**
     * Sets the enrollments property value. Specifies areas of the service in which the device is enrolled. Read-only. Returned by default.
     *  @param array<UpdatableAssetEnrollment>|null $value Value to set for the enrollments property.
    */
    public function setEnrollments(?array $value ): void {
        $this->enrollments = $value;
    }

    /**
     * Sets the errors property value. Specifies any errors that prevent the device from being enrolled in update management or receving deployed content. Read-only. Returned by default.
     *  @param array<UpdatableAssetError>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value ): void {
        $this->errors = $value;
    }

}
