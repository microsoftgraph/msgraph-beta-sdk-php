<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RetrieveRemoteHelpSessionResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $acsGroupId ACS Group Id
    */
    private ?string $acsGroupId = null;
    
    /**
     * @var string|null $acsHelperUserId Helper ACS User Id
    */
    private ?string $acsHelperUserId = null;
    
    /**
     * @var string|null $acsHelperUserToken Helper ACS User Token
    */
    private ?string $acsHelperUserToken = null;
    
    /**
     * @var string|null $acsSharerUserId Sharer ACS User Id
    */
    private ?string $acsSharerUserId = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $deviceName Android Device Name
    */
    private ?string $deviceName = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $pubSubGroupId Azure Pubsub Group Id
    */
    private ?string $pubSubGroupId = null;
    
    /**
     * @var string|null $pubSubHelperAccessUri Azure Pubsub Group Id
    */
    private ?string $pubSubHelperAccessUri = null;
    
    /**
     * @var DateTime|null $sessionExpirationDateTime Azure Pubsub Session Expiration Date Time.
    */
    private ?DateTime $sessionExpirationDateTime = null;
    
    /**
     * @var string|null $sessionKey The unique identifier for a session
    */
    private ?string $sessionKey = null;
    
    /**
     * Instantiates a new retrieveRemoteHelpSessionResponse and sets the default values.
    */
    public function __construct() {
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
        return $this->acsGroupId;
    }

    /**
     * Gets the acsHelperUserId property value. Helper ACS User Id
     * @return string|null
    */
    public function getAcsHelperUserId(): ?string {
        return $this->acsHelperUserId;
    }

    /**
     * Gets the acsHelperUserToken property value. Helper ACS User Token
     * @return string|null
    */
    public function getAcsHelperUserToken(): ?string {
        return $this->acsHelperUserToken;
    }

    /**
     * Gets the acsSharerUserId property value. Sharer ACS User Id
     * @return string|null
    */
    public function getAcsSharerUserId(): ?string {
        return $this->acsSharerUserId;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceName property value. Android Device Name
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'acsGroupId' => function (ParseNode $n) use ($o) { $o->setAcsGroupId($n->getStringValue()); },
            'acsHelperUserId' => function (ParseNode $n) use ($o) { $o->setAcsHelperUserId($n->getStringValue()); },
            'acsHelperUserToken' => function (ParseNode $n) use ($o) { $o->setAcsHelperUserToken($n->getStringValue()); },
            'acsSharerUserId' => function (ParseNode $n) use ($o) { $o->setAcsSharerUserId($n->getStringValue()); },
            'deviceName' => function (ParseNode $n) use ($o) { $o->setDeviceName($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'pubSubGroupId' => function (ParseNode $n) use ($o) { $o->setPubSubGroupId($n->getStringValue()); },
            'pubSubHelperAccessUri' => function (ParseNode $n) use ($o) { $o->setPubSubHelperAccessUri($n->getStringValue()); },
            'sessionExpirationDateTime' => function (ParseNode $n) use ($o) { $o->setSessionExpirationDateTime($n->getDateTimeValue()); },
            'sessionKey' => function (ParseNode $n) use ($o) { $o->setSessionKey($n->getStringValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the pubSubGroupId property value. Azure Pubsub Group Id
     * @return string|null
    */
    public function getPubSubGroupId(): ?string {
        return $this->pubSubGroupId;
    }

    /**
     * Gets the pubSubHelperAccessUri property value. Azure Pubsub Group Id
     * @return string|null
    */
    public function getPubSubHelperAccessUri(): ?string {
        return $this->pubSubHelperAccessUri;
    }

    /**
     * Gets the sessionExpirationDateTime property value. Azure Pubsub Session Expiration Date Time.
     * @return DateTime|null
    */
    public function getSessionExpirationDateTime(): ?DateTime {
        return $this->sessionExpirationDateTime;
    }

    /**
     * Gets the sessionKey property value. The unique identifier for a session
     * @return string|null
    */
    public function getSessionKey(): ?string {
        return $this->sessionKey;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('acsGroupId', $this->acsGroupId);
        $writer->writeStringValue('acsHelperUserId', $this->acsHelperUserId);
        $writer->writeStringValue('acsHelperUserToken', $this->acsHelperUserToken);
        $writer->writeStringValue('acsSharerUserId', $this->acsSharerUserId);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('pubSubGroupId', $this->pubSubGroupId);
        $writer->writeStringValue('pubSubHelperAccessUri', $this->pubSubHelperAccessUri);
        $writer->writeDateTimeValue('sessionExpirationDateTime', $this->sessionExpirationDateTime);
        $writer->writeStringValue('sessionKey', $this->sessionKey);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the acsGroupId property value. ACS Group Id
     *  @param string|null $value Value to set for the acsGroupId property.
    */
    public function setAcsGroupId(?string $value ): void {
        $this->acsGroupId = $value;
    }

    /**
     * Sets the acsHelperUserId property value. Helper ACS User Id
     *  @param string|null $value Value to set for the acsHelperUserId property.
    */
    public function setAcsHelperUserId(?string $value ): void {
        $this->acsHelperUserId = $value;
    }

    /**
     * Sets the acsHelperUserToken property value. Helper ACS User Token
     *  @param string|null $value Value to set for the acsHelperUserToken property.
    */
    public function setAcsHelperUserToken(?string $value ): void {
        $this->acsHelperUserToken = $value;
    }

    /**
     * Sets the acsSharerUserId property value. Sharer ACS User Id
     *  @param string|null $value Value to set for the acsSharerUserId property.
    */
    public function setAcsSharerUserId(?string $value ): void {
        $this->acsSharerUserId = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the deviceName property value. Android Device Name
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the pubSubGroupId property value. Azure Pubsub Group Id
     *  @param string|null $value Value to set for the pubSubGroupId property.
    */
    public function setPubSubGroupId(?string $value ): void {
        $this->pubSubGroupId = $value;
    }

    /**
     * Sets the pubSubHelperAccessUri property value. Azure Pubsub Group Id
     *  @param string|null $value Value to set for the pubSubHelperAccessUri property.
    */
    public function setPubSubHelperAccessUri(?string $value ): void {
        $this->pubSubHelperAccessUri = $value;
    }

    /**
     * Sets the sessionExpirationDateTime property value. Azure Pubsub Session Expiration Date Time.
     *  @param DateTime|null $value Value to set for the sessionExpirationDateTime property.
    */
    public function setSessionExpirationDateTime(?DateTime $value ): void {
        $this->sessionExpirationDateTime = $value;
    }

    /**
     * Sets the sessionKey property value. The unique identifier for a session
     *  @param string|null $value Value to set for the sessionKey property.
    */
    public function setSessionKey(?string $value ): void {
        $this->sessionKey = $value;
    }

}
