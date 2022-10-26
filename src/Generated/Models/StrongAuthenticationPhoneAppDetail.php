<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class StrongAuthenticationPhoneAppDetail extends Entity implements Parsable 
{
    /**
     * @var string|null $authenticationType The authenticationType property
    */
    private ?string $authenticationType = null;
    
    /**
     * @var string|null $authenticatorFlavor The authenticatorFlavor property
    */
    private ?string $authenticatorFlavor = null;
    
    /**
     * @var string|null $deviceId The deviceId property
    */
    private ?string $deviceId = null;
    
    /**
     * @var string|null $deviceName The deviceName property
    */
    private ?string $deviceName = null;
    
    /**
     * @var string|null $deviceTag The deviceTag property
    */
    private ?string $deviceTag = null;
    
    /**
     * @var string|null $deviceToken The deviceToken property
    */
    private ?string $deviceToken = null;
    
    /**
     * @var string|null $hashFunction The hashFunction property
    */
    private ?string $hashFunction = null;
    
    /**
     * @var DateTime|null $lastAuthenticatedDateTime The lastAuthenticatedDateTime property
    */
    private ?DateTime $lastAuthenticatedDateTime = null;
    
    /**
     * @var string|null $notificationType The notificationType property
    */
    private ?string $notificationType = null;
    
    /**
     * @var string|null $oathSecretKey The oathSecretKey property
    */
    private ?string $oathSecretKey = null;
    
    /**
     * @var OathTokenMetadata|null $oathTokenMetadata The oathTokenMetadata property
    */
    private ?OathTokenMetadata $oathTokenMetadata = null;
    
    /**
     * @var int|null $oathTokenTimeDriftInSeconds The oathTokenTimeDriftInSeconds property
    */
    private ?int $oathTokenTimeDriftInSeconds = null;
    
    /**
     * @var string|null $phoneAppVersion The phoneAppVersion property
    */
    private ?string $phoneAppVersion = null;
    
    /**
     * @var string|null $tenantDeviceId The tenantDeviceId property
    */
    private ?string $tenantDeviceId = null;
    
    /**
     * @var int|null $tokenGenerationIntervalInSeconds The tokenGenerationIntervalInSeconds property
    */
    private ?int $tokenGenerationIntervalInSeconds = null;
    
    /**
     * Instantiates a new StrongAuthenticationPhoneAppDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.strongAuthenticationPhoneAppDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StrongAuthenticationPhoneAppDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StrongAuthenticationPhoneAppDetail {
        return new StrongAuthenticationPhoneAppDetail();
    }

    /**
     * Gets the authenticationType property value. The authenticationType property
     * @return string|null
    */
    public function getAuthenticationType(): ?string {
        return $this->authenticationType;
    }

    /**
     * Gets the authenticatorFlavor property value. The authenticatorFlavor property
     * @return string|null
    */
    public function getAuthenticatorFlavor(): ?string {
        return $this->authenticatorFlavor;
    }

    /**
     * Gets the deviceId property value. The deviceId property
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * Gets the deviceName property value. The deviceName property
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * Gets the deviceTag property value. The deviceTag property
     * @return string|null
    */
    public function getDeviceTag(): ?string {
        return $this->deviceTag;
    }

    /**
     * Gets the deviceToken property value. The deviceToken property
     * @return string|null
    */
    public function getDeviceToken(): ?string {
        return $this->deviceToken;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationType' => fn(ParseNode $n) => $o->setAuthenticationType($n->getStringValue()),
            'authenticatorFlavor' => fn(ParseNode $n) => $o->setAuthenticatorFlavor($n->getStringValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'deviceTag' => fn(ParseNode $n) => $o->setDeviceTag($n->getStringValue()),
            'deviceToken' => fn(ParseNode $n) => $o->setDeviceToken($n->getStringValue()),
            'hashFunction' => fn(ParseNode $n) => $o->setHashFunction($n->getStringValue()),
            'lastAuthenticatedDateTime' => fn(ParseNode $n) => $o->setLastAuthenticatedDateTime($n->getDateTimeValue()),
            'notificationType' => fn(ParseNode $n) => $o->setNotificationType($n->getStringValue()),
            'oathSecretKey' => fn(ParseNode $n) => $o->setOathSecretKey($n->getStringValue()),
            'oathTokenMetadata' => fn(ParseNode $n) => $o->setOathTokenMetadata($n->getObjectValue([OathTokenMetadata::class, 'createFromDiscriminatorValue'])),
            'oathTokenTimeDriftInSeconds' => fn(ParseNode $n) => $o->setOathTokenTimeDriftInSeconds($n->getIntegerValue()),
            'phoneAppVersion' => fn(ParseNode $n) => $o->setPhoneAppVersion($n->getStringValue()),
            'tenantDeviceId' => fn(ParseNode $n) => $o->setTenantDeviceId($n->getStringValue()),
            'tokenGenerationIntervalInSeconds' => fn(ParseNode $n) => $o->setTokenGenerationIntervalInSeconds($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the hashFunction property value. The hashFunction property
     * @return string|null
    */
    public function getHashFunction(): ?string {
        return $this->hashFunction;
    }

    /**
     * Gets the lastAuthenticatedDateTime property value. The lastAuthenticatedDateTime property
     * @return DateTime|null
    */
    public function getLastAuthenticatedDateTime(): ?DateTime {
        return $this->lastAuthenticatedDateTime;
    }

    /**
     * Gets the notificationType property value. The notificationType property
     * @return string|null
    */
    public function getNotificationType(): ?string {
        return $this->notificationType;
    }

    /**
     * Gets the oathSecretKey property value. The oathSecretKey property
     * @return string|null
    */
    public function getOathSecretKey(): ?string {
        return $this->oathSecretKey;
    }

    /**
     * Gets the oathTokenMetadata property value. The oathTokenMetadata property
     * @return OathTokenMetadata|null
    */
    public function getOathTokenMetadata(): ?OathTokenMetadata {
        return $this->oathTokenMetadata;
    }

    /**
     * Gets the oathTokenTimeDriftInSeconds property value. The oathTokenTimeDriftInSeconds property
     * @return int|null
    */
    public function getOathTokenTimeDriftInSeconds(): ?int {
        return $this->oathTokenTimeDriftInSeconds;
    }

    /**
     * Gets the phoneAppVersion property value. The phoneAppVersion property
     * @return string|null
    */
    public function getPhoneAppVersion(): ?string {
        return $this->phoneAppVersion;
    }

    /**
     * Gets the tenantDeviceId property value. The tenantDeviceId property
     * @return string|null
    */
    public function getTenantDeviceId(): ?string {
        return $this->tenantDeviceId;
    }

    /**
     * Gets the tokenGenerationIntervalInSeconds property value. The tokenGenerationIntervalInSeconds property
     * @return int|null
    */
    public function getTokenGenerationIntervalInSeconds(): ?int {
        return $this->tokenGenerationIntervalInSeconds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('authenticationType', $this->authenticationType);
        $writer->writeStringValue('authenticatorFlavor', $this->authenticatorFlavor);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeStringValue('deviceTag', $this->deviceTag);
        $writer->writeStringValue('deviceToken', $this->deviceToken);
        $writer->writeStringValue('hashFunction', $this->hashFunction);
        $writer->writeDateTimeValue('lastAuthenticatedDateTime', $this->lastAuthenticatedDateTime);
        $writer->writeStringValue('notificationType', $this->notificationType);
        $writer->writeStringValue('oathSecretKey', $this->oathSecretKey);
        $writer->writeObjectValue('oathTokenMetadata', $this->oathTokenMetadata);
        $writer->writeIntegerValue('oathTokenTimeDriftInSeconds', $this->oathTokenTimeDriftInSeconds);
        $writer->writeStringValue('phoneAppVersion', $this->phoneAppVersion);
        $writer->writeStringValue('tenantDeviceId', $this->tenantDeviceId);
        $writer->writeIntegerValue('tokenGenerationIntervalInSeconds', $this->tokenGenerationIntervalInSeconds);
    }

    /**
     * Sets the authenticationType property value. The authenticationType property
     *  @param string|null $value Value to set for the authenticationType property.
    */
    public function setAuthenticationType(?string $value ): void {
        $this->authenticationType = $value;
    }

    /**
     * Sets the authenticatorFlavor property value. The authenticatorFlavor property
     *  @param string|null $value Value to set for the authenticatorFlavor property.
    */
    public function setAuthenticatorFlavor(?string $value ): void {
        $this->authenticatorFlavor = $value;
    }

    /**
     * Sets the deviceId property value. The deviceId property
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the deviceName property value. The deviceName property
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the deviceTag property value. The deviceTag property
     *  @param string|null $value Value to set for the deviceTag property.
    */
    public function setDeviceTag(?string $value ): void {
        $this->deviceTag = $value;
    }

    /**
     * Sets the deviceToken property value. The deviceToken property
     *  @param string|null $value Value to set for the deviceToken property.
    */
    public function setDeviceToken(?string $value ): void {
        $this->deviceToken = $value;
    }

    /**
     * Sets the hashFunction property value. The hashFunction property
     *  @param string|null $value Value to set for the hashFunction property.
    */
    public function setHashFunction(?string $value ): void {
        $this->hashFunction = $value;
    }

    /**
     * Sets the lastAuthenticatedDateTime property value. The lastAuthenticatedDateTime property
     *  @param DateTime|null $value Value to set for the lastAuthenticatedDateTime property.
    */
    public function setLastAuthenticatedDateTime(?DateTime $value ): void {
        $this->lastAuthenticatedDateTime = $value;
    }

    /**
     * Sets the notificationType property value. The notificationType property
     *  @param string|null $value Value to set for the notificationType property.
    */
    public function setNotificationType(?string $value ): void {
        $this->notificationType = $value;
    }

    /**
     * Sets the oathSecretKey property value. The oathSecretKey property
     *  @param string|null $value Value to set for the oathSecretKey property.
    */
    public function setOathSecretKey(?string $value ): void {
        $this->oathSecretKey = $value;
    }

    /**
     * Sets the oathTokenMetadata property value. The oathTokenMetadata property
     *  @param OathTokenMetadata|null $value Value to set for the oathTokenMetadata property.
    */
    public function setOathTokenMetadata(?OathTokenMetadata $value ): void {
        $this->oathTokenMetadata = $value;
    }

    /**
     * Sets the oathTokenTimeDriftInSeconds property value. The oathTokenTimeDriftInSeconds property
     *  @param int|null $value Value to set for the oathTokenTimeDriftInSeconds property.
    */
    public function setOathTokenTimeDriftInSeconds(?int $value ): void {
        $this->oathTokenTimeDriftInSeconds = $value;
    }

    /**
     * Sets the phoneAppVersion property value. The phoneAppVersion property
     *  @param string|null $value Value to set for the phoneAppVersion property.
    */
    public function setPhoneAppVersion(?string $value ): void {
        $this->phoneAppVersion = $value;
    }

    /**
     * Sets the tenantDeviceId property value. The tenantDeviceId property
     *  @param string|null $value Value to set for the tenantDeviceId property.
    */
    public function setTenantDeviceId(?string $value ): void {
        $this->tenantDeviceId = $value;
    }

    /**
     * Sets the tokenGenerationIntervalInSeconds property value. The tokenGenerationIntervalInSeconds property
     *  @param int|null $value Value to set for the tokenGenerationIntervalInSeconds property.
    */
    public function setTokenGenerationIntervalInSeconds(?int $value ): void {
        $this->tokenGenerationIntervalInSeconds = $value;
    }

}
