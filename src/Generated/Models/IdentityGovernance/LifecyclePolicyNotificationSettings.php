<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class LifecyclePolicyNotificationSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new LifecyclePolicyNotificationSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LifecyclePolicyNotificationSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LifecyclePolicyNotificationSettings {
        return new LifecyclePolicyNotificationSettings();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the additionalFallbackRecipients property value. The email addresses used when no targeted notification recipient has a valid email address. These addresses aren't copied on every notification or used alongside a valid targeted recipient.
     * @return array<string>|null
    */
    public function getAdditionalFallbackRecipients(): ?array {
        $val = $this->getBackingStore()->get('additionalFallbackRecipients');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalFallbackRecipients'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
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
            'additionalFallbackRecipients' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAdditionalFallbackRecipients($val);
            },
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'offsetsAfterNonComplianceInDays' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'int');
                }
                /** @var array<int>|null $val */
                $this->setOffsetsAfterNonComplianceInDays($val);
            },
        ];
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
     * Gets the offsetsAfterNonComplianceInDays property value. The offsets, in days after an identity becomes non-compliant, at which notifications are sent.
     * @return array<int>|null
    */
    public function getOffsetsAfterNonComplianceInDays(): ?array {
        $val = $this->getBackingStore()->get('offsetsAfterNonComplianceInDays');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'int');
            /** @var array<int>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'offsetsAfterNonComplianceInDays'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('additionalFallbackRecipients', $this->getAdditionalFallbackRecipients());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('offsetsAfterNonComplianceInDays', $this->getOffsetsAfterNonComplianceInDays());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the additionalFallbackRecipients property value. The email addresses used when no targeted notification recipient has a valid email address. These addresses aren't copied on every notification or used alongside a valid targeted recipient.
     * @param array<string>|null $value Value to set for the additionalFallbackRecipients property.
    */
    public function setAdditionalFallbackRecipients(?array $value): void {
        $this->getBackingStore()->set('additionalFallbackRecipients', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the offsetsAfterNonComplianceInDays property value. The offsets, in days after an identity becomes non-compliant, at which notifications are sent.
     * @param array<int>|null $value Value to set for the offsetsAfterNonComplianceInDays property.
    */
    public function setOffsetsAfterNonComplianceInDays(?array $value): void {
        $this->getBackingStore()->set('offsetsAfterNonComplianceInDays', $value);
    }

}
