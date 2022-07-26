<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppleOwnerTypeEnrollmentType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AppleUserInitiatedEnrollmentType|null $enrollmentType The enrollmentType property
    */
    private ?AppleUserInitiatedEnrollmentType $enrollmentType = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var ManagedDeviceOwnerType|null $ownerType Owner type of device.
    */
    private ?ManagedDeviceOwnerType $ownerType = null;
    
    /**
     * Instantiates a new appleOwnerTypeEnrollmentType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.appleOwnerTypeEnrollmentType');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppleOwnerTypeEnrollmentType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppleOwnerTypeEnrollmentType {
        return new AppleOwnerTypeEnrollmentType();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the enrollmentType property value. The enrollmentType property
     * @return AppleUserInitiatedEnrollmentType|null
    */
    public function getEnrollmentType(): ?AppleUserInitiatedEnrollmentType {
        return $this->enrollmentType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enrollmentType' => function (ParseNode $n) use ($o) { $o->setEnrollmentType($n->getEnumValue(AppleUserInitiatedEnrollmentType::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'ownerType' => function (ParseNode $n) use ($o) { $o->setOwnerType($n->getEnumValue(ManagedDeviceOwnerType::class)); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the ownerType property value. Owner type of device.
     * @return ManagedDeviceOwnerType|null
    */
    public function getOwnerType(): ?ManagedDeviceOwnerType {
        return $this->ownerType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('enrollmentType', $this->enrollmentType);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('ownerType', $this->ownerType);
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
     * Sets the enrollmentType property value. The enrollmentType property
     *  @param AppleUserInitiatedEnrollmentType|null $value Value to set for the enrollmentType property.
    */
    public function setEnrollmentType(?AppleUserInitiatedEnrollmentType $value ): void {
        $this->enrollmentType = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the ownerType property value. Owner type of device.
     *  @param ManagedDeviceOwnerType|null $value Value to set for the ownerType property.
    */
    public function setOwnerType(?ManagedDeviceOwnerType $value ): void {
        $this->ownerType = $value;
    }

}
