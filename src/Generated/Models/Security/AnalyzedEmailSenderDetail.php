<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AnalyzedEmailSenderDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AnalyzedEmailSenderDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnalyzedEmailSenderDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnalyzedEmailSenderDetail {
        return new AnalyzedEmailSenderDetail();
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
            'fromAddress' => fn(ParseNode $n) => $o->setFromAddress($n->getStringValue()),
            'ipv4' => fn(ParseNode $n) => $o->setIpv4($n->getStringValue()),
            'mailFromAddress' => fn(ParseNode $n) => $o->setMailFromAddress($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the fromAddress property value. The sender email address in the mail From header, also known as the envelope sender or the P1 sender.
     * @return string|null
    */
    public function getFromAddress(): ?string {
        $val = $this->getBackingStore()->get('fromAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fromAddress'");
    }

    /**
     * Gets the ipv4 property value. The IPv4 address of the last detected mail server that relayed the message.
     * @return string|null
    */
    public function getIpv4(): ?string {
        $val = $this->getBackingStore()->get('ipv4');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipv4'");
    }

    /**
     * Gets the mailFromAddress property value. The sender email address in the From header, which is visible to email recipients on their email clients. Also known as P2 sender.
     * @return string|null
    */
    public function getMailFromAddress(): ?string {
        $val = $this->getBackingStore()->get('mailFromAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailFromAddress'");
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
        $writer->writeStringValue('fromAddress', $this->getFromAddress());
        $writer->writeStringValue('ipv4', $this->getIpv4());
        $writer->writeStringValue('mailFromAddress', $this->getMailFromAddress());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the fromAddress property value. The sender email address in the mail From header, also known as the envelope sender or the P1 sender.
     * @param string|null $value Value to set for the fromAddress property.
    */
    public function setFromAddress(?string $value): void {
        $this->getBackingStore()->set('fromAddress', $value);
    }

    /**
     * Sets the ipv4 property value. The IPv4 address of the last detected mail server that relayed the message.
     * @param string|null $value Value to set for the ipv4 property.
    */
    public function setIpv4(?string $value): void {
        $this->getBackingStore()->set('ipv4', $value);
    }

    /**
     * Sets the mailFromAddress property value. The sender email address in the From header, which is visible to email recipients on their email clients. Also known as P2 sender.
     * @param string|null $value Value to set for the mailFromAddress property.
    */
    public function setMailFromAddress(?string $value): void {
        $this->getBackingStore()->set('mailFromAddress', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
