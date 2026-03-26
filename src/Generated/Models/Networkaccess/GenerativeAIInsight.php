<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class GenerativeAIInsight implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new GenerativeAIInsight and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GenerativeAIInsight
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GenerativeAIInsight {
        return new GenerativeAIInsight();
    }

    /**
     * Gets the activity property value. The activity property
     * @return ApplicationActivity|null
    */
    public function getActivity(): ?ApplicationActivity {
        $val = $this->getBackingStore()->get('activity');
        if (is_null($val) || $val instanceof ApplicationActivity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activity'");
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
     * Gets the content property value. The content property
     * @return string|null
    */
    public function getContent(): ?string {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the destinationUrl property value. The destinationUrl property
     * @return string|null
    */
    public function getDestinationUrl(): ?string {
        $val = $this->getBackingStore()->get('destinationUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinationUrl'");
    }

    /**
     * Gets the eventId property value. The eventId property
     * @return string|null
    */
    public function getEventId(): ?string {
        $val = $this->getBackingStore()->get('eventId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventId'");
    }

    /**
     * Gets the eventType property value. The eventType property
     * @return string|null
    */
    public function getEventType(): ?string {
        $val = $this->getBackingStore()->get('eventType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'activity' => fn(ParseNode $n) => $o->setActivity($n->getEnumValue(ApplicationActivity::class)),
            'content' => fn(ParseNode $n) => $o->setContent($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'destinationUrl' => fn(ParseNode $n) => $o->setDestinationUrl($n->getStringValue()),
            'eventId' => fn(ParseNode $n) => $o->setEventId($n->getStringValue()),
            'eventType' => fn(ParseNode $n) => $o->setEventType($n->getStringValue()),
            'mcpClientName' => fn(ParseNode $n) => $o->setMcpClientName($n->getStringValue()),
            'mcpServerName' => fn(ParseNode $n) => $o->setMcpServerName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sessionId' => fn(ParseNode $n) => $o->setSessionId($n->getStringValue()),
            'subactivity' => fn(ParseNode $n) => $o->setSubactivity($n->getStringValue()),
            'transactionId' => fn(ParseNode $n) => $o->setTransactionId($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ];
    }

    /**
     * Gets the mcpClientName property value. The mcpClientName property
     * @return string|null
    */
    public function getMcpClientName(): ?string {
        $val = $this->getBackingStore()->get('mcpClientName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mcpClientName'");
    }

    /**
     * Gets the mcpServerName property value. The mcpServerName property
     * @return string|null
    */
    public function getMcpServerName(): ?string {
        $val = $this->getBackingStore()->get('mcpServerName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mcpServerName'");
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
     * Gets the sessionId property value. The sessionId property
     * @return string|null
    */
    public function getSessionId(): ?string {
        $val = $this->getBackingStore()->get('sessionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sessionId'");
    }

    /**
     * Gets the subactivity property value. The subactivity property
     * @return string|null
    */
    public function getSubactivity(): ?string {
        $val = $this->getBackingStore()->get('subactivity');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subactivity'");
    }

    /**
     * Gets the transactionId property value. The transactionId property
     * @return string|null
    */
    public function getTransactionId(): ?string {
        $val = $this->getBackingStore()->get('transactionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transactionId'");
    }

    /**
     * Gets the userPrincipalName property value. The userPrincipalName property
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('activity', $this->getActivity());
        $writer->writeStringValue('content', $this->getContent());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('destinationUrl', $this->getDestinationUrl());
        $writer->writeStringValue('eventId', $this->getEventId());
        $writer->writeStringValue('eventType', $this->getEventType());
        $writer->writeStringValue('mcpClientName', $this->getMcpClientName());
        $writer->writeStringValue('mcpServerName', $this->getMcpServerName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('sessionId', $this->getSessionId());
        $writer->writeStringValue('subactivity', $this->getSubactivity());
        $writer->writeStringValue('transactionId', $this->getTransactionId());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activity property value. The activity property
     * @param ApplicationActivity|null $value Value to set for the activity property.
    */
    public function setActivity(?ApplicationActivity $value): void {
        $this->getBackingStore()->set('activity', $value);
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
     * Sets the content property value. The content property
     * @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the destinationUrl property value. The destinationUrl property
     * @param string|null $value Value to set for the destinationUrl property.
    */
    public function setDestinationUrl(?string $value): void {
        $this->getBackingStore()->set('destinationUrl', $value);
    }

    /**
     * Sets the eventId property value. The eventId property
     * @param string|null $value Value to set for the eventId property.
    */
    public function setEventId(?string $value): void {
        $this->getBackingStore()->set('eventId', $value);
    }

    /**
     * Sets the eventType property value. The eventType property
     * @param string|null $value Value to set for the eventType property.
    */
    public function setEventType(?string $value): void {
        $this->getBackingStore()->set('eventType', $value);
    }

    /**
     * Sets the mcpClientName property value. The mcpClientName property
     * @param string|null $value Value to set for the mcpClientName property.
    */
    public function setMcpClientName(?string $value): void {
        $this->getBackingStore()->set('mcpClientName', $value);
    }

    /**
     * Sets the mcpServerName property value. The mcpServerName property
     * @param string|null $value Value to set for the mcpServerName property.
    */
    public function setMcpServerName(?string $value): void {
        $this->getBackingStore()->set('mcpServerName', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sessionId property value. The sessionId property
     * @param string|null $value Value to set for the sessionId property.
    */
    public function setSessionId(?string $value): void {
        $this->getBackingStore()->set('sessionId', $value);
    }

    /**
     * Sets the subactivity property value. The subactivity property
     * @param string|null $value Value to set for the subactivity property.
    */
    public function setSubactivity(?string $value): void {
        $this->getBackingStore()->set('subactivity', $value);
    }

    /**
     * Sets the transactionId property value. The transactionId property
     * @param string|null $value Value to set for the transactionId property.
    */
    public function setTransactionId(?string $value): void {
        $this->getBackingStore()->set('transactionId', $value);
    }

    /**
     * Sets the userPrincipalName property value. The userPrincipalName property
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
