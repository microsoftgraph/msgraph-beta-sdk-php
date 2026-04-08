<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\Dlp;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\Date;

class AppAccessContext implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AppAccessContext and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppAccessContext
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppAccessContext {
        return new AppAccessContext();
    }

    /**
     * Gets the aadSessionId property value. The aadSessionId property
     * @return string|null
    */
    public function getAadSessionId(): ?string {
        $val = $this->getBackingStore()->get('aadSessionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'aadSessionId'");
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
     * Gets the apiId property value. The apiId property
     * @return string|null
    */
    public function getApiId(): ?string {
        $val = $this->getBackingStore()->get('apiId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'apiId'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the clientAppId property value. The clientAppId property
     * @return string|null
    */
    public function getClientAppId(): ?string {
        $val = $this->getBackingStore()->get('clientAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientAppId'");
    }

    /**
     * Gets the clientAppName property value. The clientAppName property
     * @return string|null
    */
    public function getClientAppName(): ?string {
        $val = $this->getBackingStore()->get('clientAppName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientAppName'");
    }

    /**
     * Gets the correlationId property value. The correlationId property
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        $val = $this->getBackingStore()->get('correlationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'correlationId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aadSessionId' => fn(ParseNode $n) => $o->setAadSessionId($n->getStringValue()),
            'apiId' => fn(ParseNode $n) => $o->setApiId($n->getStringValue()),
            'clientAppId' => fn(ParseNode $n) => $o->setClientAppId($n->getStringValue()),
            'clientAppName' => fn(ParseNode $n) => $o->setClientAppName($n->getStringValue()),
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'issuedAtDate' => fn(ParseNode $n) => $o->setIssuedAtDate($n->getDateValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'uniqueTokenId' => fn(ParseNode $n) => $o->setUniqueTokenId($n->getStringValue()),
        ];
    }

    /**
     * Gets the issuedAtDate property value. The issuedAtDate property
     * @return Date|null
    */
    public function getIssuedAtDate(): ?Date {
        $val = $this->getBackingStore()->get('issuedAtDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'issuedAtDate'");
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
     * Gets the uniqueTokenId property value. The uniqueTokenId property
     * @return string|null
    */
    public function getUniqueTokenId(): ?string {
        $val = $this->getBackingStore()->get('uniqueTokenId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uniqueTokenId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('aadSessionId', $this->getAadSessionId());
        $writer->writeStringValue('apiId', $this->getApiId());
        $writer->writeStringValue('clientAppId', $this->getClientAppId());
        $writer->writeStringValue('clientAppName', $this->getClientAppName());
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeDateValue('issuedAtDate', $this->getIssuedAtDate());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('uniqueTokenId', $this->getUniqueTokenId());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the aadSessionId property value. The aadSessionId property
     * @param string|null $value Value to set for the aadSessionId property.
    */
    public function setAadSessionId(?string $value): void {
        $this->getBackingStore()->set('aadSessionId', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the apiId property value. The apiId property
     * @param string|null $value Value to set for the apiId property.
    */
    public function setApiId(?string $value): void {
        $this->getBackingStore()->set('apiId', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the clientAppId property value. The clientAppId property
     * @param string|null $value Value to set for the clientAppId property.
    */
    public function setClientAppId(?string $value): void {
        $this->getBackingStore()->set('clientAppId', $value);
    }

    /**
     * Sets the clientAppName property value. The clientAppName property
     * @param string|null $value Value to set for the clientAppName property.
    */
    public function setClientAppName(?string $value): void {
        $this->getBackingStore()->set('clientAppName', $value);
    }

    /**
     * Sets the correlationId property value. The correlationId property
     * @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->getBackingStore()->set('correlationId', $value);
    }

    /**
     * Sets the issuedAtDate property value. The issuedAtDate property
     * @param Date|null $value Value to set for the issuedAtDate property.
    */
    public function setIssuedAtDate(?Date $value): void {
        $this->getBackingStore()->set('issuedAtDate', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the uniqueTokenId property value. The uniqueTokenId property
     * @param string|null $value Value to set for the uniqueTokenId property.
    */
    public function setUniqueTokenId(?string $value): void {
        $this->getBackingStore()->set('uniqueTokenId', $value);
    }

}
