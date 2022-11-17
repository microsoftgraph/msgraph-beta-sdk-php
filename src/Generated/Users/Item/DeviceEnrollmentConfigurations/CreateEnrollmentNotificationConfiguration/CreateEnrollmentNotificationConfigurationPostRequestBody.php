<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\DeviceEnrollmentConfigurations\CreateEnrollmentNotificationConfiguration;

use Microsoft\Graph\Beta\Generated\Models\DeviceEnrollmentConfiguration;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CreateEnrollmentNotificationConfigurationPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new createEnrollmentNotificationConfigurationPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the deviceEnrollmentNotificationConfigurations property value. The deviceEnrollmentNotificationConfigurations property
     * @return array<DeviceEnrollmentConfiguration>|null
    */
    public function getDeviceEnrollmentNotificationConfigurations(): ?array {
        return $this->getBackingStore()->get('deviceEnrollmentNotificationConfigurations');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceEnrollmentNotificationConfigurations' => fn(ParseNode $n) => $o->setDeviceEnrollmentNotificationConfigurations($n->getCollectionOfObjectValues([DeviceEnrollmentConfiguration::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('deviceEnrollmentNotificationConfigurations', $this->getDeviceEnrollmentNotificationConfigurations());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the deviceEnrollmentNotificationConfigurations property value. The deviceEnrollmentNotificationConfigurations property
     *  @param array<DeviceEnrollmentConfiguration>|null $value Value to set for the deviceEnrollmentNotificationConfigurations property.
    */
    public function setDeviceEnrollmentNotificationConfigurations(?array $value): void {
        $this->getBackingStore()->set('deviceEnrollmentNotificationConfigurations', $value);
    }

}
