<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class FraudProtectionDetails implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new FraudProtectionDetails and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FraudProtectionDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FraudProtectionDetails {
        return new FraudProtectionDetails();
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'providerErrorMessages' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setProviderErrorMessages($val);
            },
            'providerHttpStatusCodes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'int');
                }
                /** @var array<int>|null $val */
                $this->setProviderHttpStatusCodes($val);
            },
            'providerName' => fn(ParseNode $n) => $o->setProviderName($n->getStringValue()),
            'providerResponseTimes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'int');
                }
                /** @var array<int>|null $val */
                $this->setProviderResponseTimes($val);
            },
            'providerSessionId' => fn(ParseNode $n) => $o->setProviderSessionId($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'verdict' => fn(ParseNode $n) => $o->setVerdict($n->getStringValue()),
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
     * Gets the providerErrorMessages property value. The providerErrorMessages property
     * @return array<string>|null
    */
    public function getProviderErrorMessages(): ?array {
        $val = $this->getBackingStore()->get('providerErrorMessages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'providerErrorMessages'");
    }

    /**
     * Gets the providerHttpStatusCodes property value. The providerHttpStatusCodes property
     * @return array<int>|null
    */
    public function getProviderHttpStatusCodes(): ?array {
        $val = $this->getBackingStore()->get('providerHttpStatusCodes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'int');
            /** @var array<int>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'providerHttpStatusCodes'");
    }

    /**
     * Gets the providerName property value. The providerName property
     * @return string|null
    */
    public function getProviderName(): ?string {
        $val = $this->getBackingStore()->get('providerName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'providerName'");
    }

    /**
     * Gets the providerResponseTimes property value. The providerResponseTimes property
     * @return array<int>|null
    */
    public function getProviderResponseTimes(): ?array {
        $val = $this->getBackingStore()->get('providerResponseTimes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'int');
            /** @var array<int>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'providerResponseTimes'");
    }

    /**
     * Gets the providerSessionId property value. The providerSessionId property
     * @return string|null
    */
    public function getProviderSessionId(): ?string {
        $val = $this->getBackingStore()->get('providerSessionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'providerSessionId'");
    }

    /**
     * Gets the reason property value. The reason property
     * @return string|null
    */
    public function getReason(): ?string {
        $val = $this->getBackingStore()->get('reason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reason'");
    }

    /**
     * Gets the verdict property value. The verdict property
     * @return string|null
    */
    public function getVerdict(): ?string {
        $val = $this->getBackingStore()->get('verdict');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verdict'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('providerErrorMessages', $this->getProviderErrorMessages());
        $writer->writeCollectionOfPrimitiveValues('providerHttpStatusCodes', $this->getProviderHttpStatusCodes());
        $writer->writeStringValue('providerName', $this->getProviderName());
        $writer->writeCollectionOfPrimitiveValues('providerResponseTimes', $this->getProviderResponseTimes());
        $writer->writeStringValue('providerSessionId', $this->getProviderSessionId());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeStringValue('verdict', $this->getVerdict());
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
     * Sets the providerErrorMessages property value. The providerErrorMessages property
     * @param array<string>|null $value Value to set for the providerErrorMessages property.
    */
    public function setProviderErrorMessages(?array $value): void {
        $this->getBackingStore()->set('providerErrorMessages', $value);
    }

    /**
     * Sets the providerHttpStatusCodes property value. The providerHttpStatusCodes property
     * @param array<int>|null $value Value to set for the providerHttpStatusCodes property.
    */
    public function setProviderHttpStatusCodes(?array $value): void {
        $this->getBackingStore()->set('providerHttpStatusCodes', $value);
    }

    /**
     * Sets the providerName property value. The providerName property
     * @param string|null $value Value to set for the providerName property.
    */
    public function setProviderName(?string $value): void {
        $this->getBackingStore()->set('providerName', $value);
    }

    /**
     * Sets the providerResponseTimes property value. The providerResponseTimes property
     * @param array<int>|null $value Value to set for the providerResponseTimes property.
    */
    public function setProviderResponseTimes(?array $value): void {
        $this->getBackingStore()->set('providerResponseTimes', $value);
    }

    /**
     * Sets the providerSessionId property value. The providerSessionId property
     * @param string|null $value Value to set for the providerSessionId property.
    */
    public function setProviderSessionId(?string $value): void {
        $this->getBackingStore()->set('providerSessionId', $value);
    }

    /**
     * Sets the reason property value. The reason property
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->getBackingStore()->set('reason', $value);
    }

    /**
     * Sets the verdict property value. The verdict property
     * @param string|null $value Value to set for the verdict property.
    */
    public function setVerdict(?string $value): void {
        $this->getBackingStore()->set('verdict', $value);
    }

}
