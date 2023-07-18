<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TodoSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new todoSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TodoSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TodoSettings {
        return new TodoSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'isExternalJoinEnabled' => fn(ParseNode $n) => $o->setIsExternalJoinEnabled($n->getBooleanValue()),
            'isExternalShareEnabled' => fn(ParseNode $n) => $o->setIsExternalShareEnabled($n->getBooleanValue()),
            'isPushNotificationEnabled' => fn(ParseNode $n) => $o->setIsPushNotificationEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isExternalJoinEnabled property value. Controls whether users can join lists from users external to your organization.
     * @return bool|null
    */
    public function getIsExternalJoinEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isExternalJoinEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isExternalJoinEnabled'");
    }

    /**
     * Gets the isExternalShareEnabled property value. Controls whether users can share lists with external users.
     * @return bool|null
    */
    public function getIsExternalShareEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isExternalShareEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isExternalShareEnabled'");
    }

    /**
     * Gets the isPushNotificationEnabled property value. Controls whether push notifications are enabled for your users.
     * @return bool|null
    */
    public function getIsPushNotificationEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isPushNotificationEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPushNotificationEnabled'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isExternalJoinEnabled', $this->getIsExternalJoinEnabled());
        $writer->writeBooleanValue('isExternalShareEnabled', $this->getIsExternalShareEnabled());
        $writer->writeBooleanValue('isPushNotificationEnabled', $this->getIsPushNotificationEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the isExternalJoinEnabled property value. Controls whether users can join lists from users external to your organization.
     * @param bool|null $value Value to set for the isExternalJoinEnabled property.
    */
    public function setIsExternalJoinEnabled(?bool $value): void {
        $this->getBackingStore()->set('isExternalJoinEnabled', $value);
    }

    /**
     * Sets the isExternalShareEnabled property value. Controls whether users can share lists with external users.
     * @param bool|null $value Value to set for the isExternalShareEnabled property.
    */
    public function setIsExternalShareEnabled(?bool $value): void {
        $this->getBackingStore()->set('isExternalShareEnabled', $value);
    }

    /**
     * Sets the isPushNotificationEnabled property value. Controls whether push notifications are enabled for your users.
     * @param bool|null $value Value to set for the isPushNotificationEnabled property.
    */
    public function setIsPushNotificationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isPushNotificationEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
