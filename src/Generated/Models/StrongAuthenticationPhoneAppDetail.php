<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class StrongAuthenticationPhoneAppDetail extends Entity implements Parsable 
{
    /**
     * Instantiates a new StrongAuthenticationPhoneAppDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('authenticationType');
    }

    /**
     * Gets the authenticatorFlavor property value. The authenticatorFlavor property
     * @return string|null
    */
    public function getAuthenticatorFlavor(): ?string {
        return $this->getBackingStore()->get('authenticatorFlavor');
    }

    /**
     * Gets the deviceId property value. The deviceId property
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->getBackingStore()->get('deviceId');
    }

    /**
     * Gets the deviceName property value. The deviceName property
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->getBackingStore()->get('deviceName');
    }

    /**
     * Gets the deviceTag property value. The deviceTag property
     * @return string|null
    */
    public function getDeviceTag(): ?string {
        return $this->getBackingStore()->get('deviceTag');
    }

    /**
     * Gets the deviceToken property value. The deviceToken property
     * @return string|null
    */
    public function getDeviceToken(): ?string {
        return $this->getBackingStore()->get('deviceToken');
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
        return $this->getBackingStore()->get('hashFunction');
    }

    /**
     * Gets the lastAuthenticatedDateTime property value. The lastAuthenticatedDateTime property
     * @return DateTime|null
    */
    public function getLastAuthenticatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastAuthenticatedDateTime');
    }

    /**
     * Gets the notificationType property value. The notificationType property
     * @return string|null
    */
    public function getNotificationType(): ?string {
        return $this->getBackingStore()->get('notificationType');
    }

    /**
     * Gets the oathSecretKey property value. The oathSecretKey property
     * @return string|null
    */
    public function getOathSecretKey(): ?string {
        return $this->getBackingStore()->get('oathSecretKey');
    }

    /**
     * Gets the oathTokenMetadata property value. The oathTokenMetadata property
     * @return OathTokenMetadata|null
    */
    public function getOathTokenMetadata(): ?OathTokenMetadata {
        return $this->getBackingStore()->get('oathTokenMetadata');
    }

    /**
     * Gets the oathTokenTimeDriftInSeconds property value. The oathTokenTimeDriftInSeconds property
     * @return int|null
    */
    public function getOathTokenTimeDriftInSeconds(): ?int {
        return $this->getBackingStore()->get('oathTokenTimeDriftInSeconds');
    }

    /**
     * Gets the phoneAppVersion property value. The phoneAppVersion property
     * @return string|null
    */
    public function getPhoneAppVersion(): ?string {
        return $this->getBackingStore()->get('phoneAppVersion');
    }

    /**
     * Gets the tenantDeviceId property value. The tenantDeviceId property
     * @return string|null
    */
    public function getTenantDeviceId(): ?string {
        return $this->getBackingStore()->get('tenantDeviceId');
    }

    /**
     * Gets the tokenGenerationIntervalInSeconds property value. The tokenGenerationIntervalInSeconds property
     * @return int|null
    */
    public function getTokenGenerationIntervalInSeconds(): ?int {
        return $this->getBackingStore()->get('tokenGenerationIntervalInSeconds');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('authenticationType', $this->getAuthenticationType());
        $writer->writeStringValue('authenticatorFlavor', $this->getAuthenticatorFlavor());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeStringValue('deviceTag', $this->getDeviceTag());
        $writer->writeStringValue('deviceToken', $this->getDeviceToken());
        $writer->writeStringValue('hashFunction', $this->getHashFunction());
        $writer->writeDateTimeValue('lastAuthenticatedDateTime', $this->getLastAuthenticatedDateTime());
        $writer->writeStringValue('notificationType', $this->getNotificationType());
        $writer->writeStringValue('oathSecretKey', $this->getOathSecretKey());
        $writer->writeObjectValue('oathTokenMetadata', $this->getOathTokenMetadata());
        $writer->writeIntegerValue('oathTokenTimeDriftInSeconds', $this->getOathTokenTimeDriftInSeconds());
        $writer->writeStringValue('phoneAppVersion', $this->getPhoneAppVersion());
        $writer->writeStringValue('tenantDeviceId', $this->getTenantDeviceId());
        $writer->writeIntegerValue('tokenGenerationIntervalInSeconds', $this->getTokenGenerationIntervalInSeconds());
    }

    /**
     * Sets the authenticationType property value. The authenticationType property
     *  @param string|null $value Value to set for the authenticationType property.
    */
    public function setAuthenticationType(?string $value): void {
        $this->getBackingStore()->set('authenticationType', $value);
    }

    /**
     * Sets the authenticatorFlavor property value. The authenticatorFlavor property
     *  @param string|null $value Value to set for the authenticatorFlavor property.
    */
    public function setAuthenticatorFlavor(?string $value): void {
        $this->getBackingStore()->set('authenticatorFlavor', $value);
    }

    /**
     * Sets the deviceId property value. The deviceId property
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the deviceName property value. The deviceName property
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the deviceTag property value. The deviceTag property
     *  @param string|null $value Value to set for the deviceTag property.
    */
    public function setDeviceTag(?string $value): void {
        $this->getBackingStore()->set('deviceTag', $value);
    }

    /**
     * Sets the deviceToken property value. The deviceToken property
     *  @param string|null $value Value to set for the deviceToken property.
    */
    public function setDeviceToken(?string $value): void {
        $this->getBackingStore()->set('deviceToken', $value);
    }

    /**
     * Sets the hashFunction property value. The hashFunction property
     *  @param string|null $value Value to set for the hashFunction property.
    */
    public function setHashFunction(?string $value): void {
        $this->getBackingStore()->set('hashFunction', $value);
    }

    /**
     * Sets the lastAuthenticatedDateTime property value. The lastAuthenticatedDateTime property
     *  @param DateTime|null $value Value to set for the lastAuthenticatedDateTime property.
    */
    public function setLastAuthenticatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastAuthenticatedDateTime', $value);
    }

    /**
     * Sets the notificationType property value. The notificationType property
     *  @param string|null $value Value to set for the notificationType property.
    */
    public function setNotificationType(?string $value): void {
        $this->getBackingStore()->set('notificationType', $value);
    }

    /**
     * Sets the oathSecretKey property value. The oathSecretKey property
     *  @param string|null $value Value to set for the oathSecretKey property.
    */
    public function setOathSecretKey(?string $value): void {
        $this->getBackingStore()->set('oathSecretKey', $value);
    }

    /**
     * Sets the oathTokenMetadata property value. The oathTokenMetadata property
     *  @param OathTokenMetadata|null $value Value to set for the oathTokenMetadata property.
    */
    public function setOathTokenMetadata(?OathTokenMetadata $value): void {
        $this->getBackingStore()->set('oathTokenMetadata', $value);
    }

    /**
     * Sets the oathTokenTimeDriftInSeconds property value. The oathTokenTimeDriftInSeconds property
     *  @param int|null $value Value to set for the oathTokenTimeDriftInSeconds property.
    */
    public function setOathTokenTimeDriftInSeconds(?int $value): void {
        $this->getBackingStore()->set('oathTokenTimeDriftInSeconds', $value);
    }

    /**
     * Sets the phoneAppVersion property value. The phoneAppVersion property
     *  @param string|null $value Value to set for the phoneAppVersion property.
    */
    public function setPhoneAppVersion(?string $value): void {
        $this->getBackingStore()->set('phoneAppVersion', $value);
    }

    /**
     * Sets the tenantDeviceId property value. The tenantDeviceId property
     *  @param string|null $value Value to set for the tenantDeviceId property.
    */
    public function setTenantDeviceId(?string $value): void {
        $this->getBackingStore()->set('tenantDeviceId', $value);
    }

    /**
     * Sets the tokenGenerationIntervalInSeconds property value. The tokenGenerationIntervalInSeconds property
     *  @param int|null $value Value to set for the tokenGenerationIntervalInSeconds property.
    */
    public function setTokenGenerationIntervalInSeconds(?int $value): void {
        $this->getBackingStore()->set('tokenGenerationIntervalInSeconds', $value);
    }

}
