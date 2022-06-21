<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceEnrollmentConfigurations\CreateEnrollmentNotificationConfiguration;

use Microsoft\Graph\Beta\Generated\Models\DeviceEnrollmentConfiguration;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateEnrollmentNotificationConfigurationPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<DeviceEnrollmentConfiguration>|null $deviceEnrollmentNotificationConfigurations The deviceEnrollmentNotificationConfigurations property
    */
    private ?array $deviceEnrollmentNotificationConfigurations = null;
    
    /**
     * Instantiates a new createEnrollmentNotificationConfigurationPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateEnrollmentNotificationConfigurationPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateEnrollmentNotificationConfigurationPostRequestBody {
        return new CreateEnrollmentNotificationConfigurationPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceEnrollmentNotificationConfigurations property value. The deviceEnrollmentNotificationConfigurations property
     * @return array<DeviceEnrollmentConfiguration>|null
    */
    public function getDeviceEnrollmentNotificationConfigurations(): ?array {
        return $this->deviceEnrollmentNotificationConfigurations;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceEnrollmentNotificationConfigurations' => function (ParseNode $n) use ($o) { $o->setDeviceEnrollmentNotificationConfigurations($n->getCollectionOfObjectValues(array(DeviceEnrollmentConfiguration::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('deviceEnrollmentNotificationConfigurations', $this->deviceEnrollmentNotificationConfigurations);
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
     * Sets the deviceEnrollmentNotificationConfigurations property value. The deviceEnrollmentNotificationConfigurations property
     *  @param array<DeviceEnrollmentConfiguration>|null $value Value to set for the deviceEnrollmentNotificationConfigurations property.
    */
    public function setDeviceEnrollmentNotificationConfigurations(?array $value ): void {
        $this->deviceEnrollmentNotificationConfigurations = $value;
    }

}
