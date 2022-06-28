<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AzureADDevice extends UpdatableAsset implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
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
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
            'enrollments' => function (ParseNode $n) use ($o) { $o->setEnrollments($n->getCollectionOfObjectValues(array(UpdatableAssetEnrollment::class, 'createFromDiscriminatorValue'))); },
            'errors' => function (ParseNode $n) use ($o) { $o->setErrors($n->getCollectionOfObjectValues(array(UpdatableAssetError::class, 'createFromDiscriminatorValue'))); },
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
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
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
