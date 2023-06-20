<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ReportSuspiciousActivitySettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new reportSuspiciousActivitySettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReportSuspiciousActivitySettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReportSuspiciousActivitySettings {
        return new ReportSuspiciousActivitySettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'includeTarget' => fn(ParseNode $n) => $o->setIncludeTarget($n->getObjectValue([IncludeTarget::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(AdvancedConfigState::class)),
            'voiceReportingCode' => fn(ParseNode $n) => $o->setVoiceReportingCode($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the includeTarget property value. The includeTarget property
     * @return IncludeTarget|null
    */
    public function getIncludeTarget(): ?IncludeTarget {
        return $this->getBackingStore()->get('includeTarget');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the state property value. The state property
     * @return AdvancedConfigState|null
    */
    public function getState(): ?AdvancedConfigState {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Gets the voiceReportingCode property value. Specifies the number the user will enter on their phone to report the MFA prompt as suspicious.
     * @return int|null
    */
    public function getVoiceReportingCode(): ?int {
        return $this->getBackingStore()->get('voiceReportingCode');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('includeTarget', $this->getIncludeTarget());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeIntegerValue('voiceReportingCode', $this->getVoiceReportingCode());
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
     * Sets the includeTarget property value. The includeTarget property
     * @param IncludeTarget|null $value Value to set for the includeTarget property.
    */
    public function setIncludeTarget(?IncludeTarget $value): void {
        $this->getBackingStore()->set('includeTarget', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param AdvancedConfigState|null $value Value to set for the state property.
    */
    public function setState(?AdvancedConfigState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the voiceReportingCode property value. Specifies the number the user will enter on their phone to report the MFA prompt as suspicious.
     * @param int|null $value Value to set for the voiceReportingCode property.
    */
    public function setVoiceReportingCode(?int $value): void {
        $this->getBackingStore()->set('voiceReportingCode', $value);
    }

}
