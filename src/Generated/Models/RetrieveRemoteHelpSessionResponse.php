<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class RetrieveRemoteHelpSessionResponse implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new retrieveRemoteHelpSessionResponse and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.retrieveRemoteHelpSessionResponse');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RetrieveRemoteHelpSessionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RetrieveRemoteHelpSessionResponse {
        return new RetrieveRemoteHelpSessionResponse();
    }

    /**
     * Gets the acsGroupId property value. ACS Group Id
     * @return string|null
    */
    public function getAcsGroupId(): ?string {
        return $this->getBackingStore()->get('acsGroupId');
    }

    /**
     * Gets the acsHelperUserId property value. Helper ACS User Id
     * @return string|null
    */
    public function getAcsHelperUserId(): ?string {
        return $this->getBackingStore()->get('acsHelperUserId');
    }

    /**
     * Gets the acsHelperUserToken property value. Helper ACS User Token
     * @return string|null
    */
    public function getAcsHelperUserToken(): ?string {
        return $this->getBackingStore()->get('acsHelperUserToken');
    }

    /**
     * Gets the acsSharerUserId property value. Sharer ACS User Id
     * @return string|null
    */
    public function getAcsSharerUserId(): ?string {
        return $this->getBackingStore()->get('acsSharerUserId');
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
     * Gets the deviceName property value. Android Device Name
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->getBackingStore()->get('deviceName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'acsGroupId' => fn(ParseNode $n) => $o->setAcsGroupId($n->getStringValue()),
            'acsHelperUserId' => fn(ParseNode $n) => $o->setAcsHelperUserId($n->getStringValue()),
            'acsHelperUserToken' => fn(ParseNode $n) => $o->setAcsHelperUserToken($n->getStringValue()),
            'acsSharerUserId' => fn(ParseNode $n) => $o->setAcsSharerUserId($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'pubSubGroupId' => fn(ParseNode $n) => $o->setPubSubGroupId($n->getStringValue()),
            'pubSubHelperAccessUri' => fn(ParseNode $n) => $o->setPubSubHelperAccessUri($n->getStringValue()),
            'sessionExpirationDateTime' => fn(ParseNode $n) => $o->setSessionExpirationDateTime($n->getDateTimeValue()),
            'sessionKey' => fn(ParseNode $n) => $o->setSessionKey($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the pubSubGroupId property value. Azure Pubsub Group Id
     * @return string|null
    */
    public function getPubSubGroupId(): ?string {
        return $this->getBackingStore()->get('pubSubGroupId');
    }

    /**
     * Gets the pubSubHelperAccessUri property value. Azure Pubsub Group Id
     * @return string|null
    */
    public function getPubSubHelperAccessUri(): ?string {
        return $this->getBackingStore()->get('pubSubHelperAccessUri');
    }

    /**
     * Gets the sessionExpirationDateTime property value. Azure Pubsub Session Expiration Date Time.
     * @return DateTime|null
    */
    public function getSessionExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('sessionExpirationDateTime');
    }

    /**
     * Gets the sessionKey property value. The unique identifier for a session
     * @return string|null
    */
    public function getSessionKey(): ?string {
        return $this->getBackingStore()->get('sessionKey');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('acsGroupId', $this->getAcsGroupId());
        $writer->writeStringValue('acsHelperUserId', $this->getAcsHelperUserId());
        $writer->writeStringValue('acsHelperUserToken', $this->getAcsHelperUserToken());
        $writer->writeStringValue('acsSharerUserId', $this->getAcsSharerUserId());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('pubSubGroupId', $this->getPubSubGroupId());
        $writer->writeStringValue('pubSubHelperAccessUri', $this->getPubSubHelperAccessUri());
        $writer->writeDateTimeValue('sessionExpirationDateTime', $this->getSessionExpirationDateTime());
        $writer->writeStringValue('sessionKey', $this->getSessionKey());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the acsGroupId property value. ACS Group Id
     *  @param string|null $value Value to set for the acsGroupId property.
    */
    public function setAcsGroupId(?string $value): void {
        $this->getBackingStore()->set('acsGroupId', $value);
    }

    /**
     * Sets the acsHelperUserId property value. Helper ACS User Id
     *  @param string|null $value Value to set for the acsHelperUserId property.
    */
    public function setAcsHelperUserId(?string $value): void {
        $this->getBackingStore()->set('acsHelperUserId', $value);
    }

    /**
     * Sets the acsHelperUserToken property value. Helper ACS User Token
     *  @param string|null $value Value to set for the acsHelperUserToken property.
    */
    public function setAcsHelperUserToken(?string $value): void {
        $this->getBackingStore()->set('acsHelperUserToken', $value);
    }

    /**
     * Sets the acsSharerUserId property value. Sharer ACS User Id
     *  @param string|null $value Value to set for the acsSharerUserId property.
    */
    public function setAcsSharerUserId(?string $value): void {
        $this->getBackingStore()->set('acsSharerUserId', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the deviceName property value. Android Device Name
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the pubSubGroupId property value. Azure Pubsub Group Id
     *  @param string|null $value Value to set for the pubSubGroupId property.
    */
    public function setPubSubGroupId(?string $value): void {
        $this->getBackingStore()->set('pubSubGroupId', $value);
    }

    /**
     * Sets the pubSubHelperAccessUri property value. Azure Pubsub Group Id
     *  @param string|null $value Value to set for the pubSubHelperAccessUri property.
    */
    public function setPubSubHelperAccessUri(?string $value): void {
        $this->getBackingStore()->set('pubSubHelperAccessUri', $value);
    }

    /**
     * Sets the sessionExpirationDateTime property value. Azure Pubsub Session Expiration Date Time.
     *  @param DateTime|null $value Value to set for the sessionExpirationDateTime property.
    */
    public function setSessionExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('sessionExpirationDateTime', $value);
    }

    /**
     * Sets the sessionKey property value. The unique identifier for a session
     *  @param string|null $value Value to set for the sessionKey property.
    */
    public function setSessionKey(?string $value): void {
        $this->getBackingStore()->set('sessionKey', $value);
    }

}
