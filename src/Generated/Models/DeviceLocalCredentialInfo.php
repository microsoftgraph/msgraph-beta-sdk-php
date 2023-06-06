<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceLocalCredentialInfo extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceLocalCredentialInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceLocalCredentialInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceLocalCredentialInfo {
        return new DeviceLocalCredentialInfo();
    }

    /**
     * Gets the credentials property value. The credentials of the device's local administrator account backed up to Azure Active Directory.
     * @return array<DeviceLocalCredential>|null
    */
    public function getCredentials(): ?array {
        return $this->getBackingStore()->get('credentials');
    }

    /**
     * Gets the deviceName property value. Display name of the device that the local credentials are associated with.
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
        return array_merge(parent::getFieldDeserializers(), [
            'credentials' => fn(ParseNode $n) => $o->setCredentials($n->getCollectionOfObjectValues([DeviceLocalCredential::class, 'createFromDiscriminatorValue'])),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'lastBackupDateTime' => fn(ParseNode $n) => $o->setLastBackupDateTime($n->getDateTimeValue()),
            'refreshDateTime' => fn(ParseNode $n) => $o->setRefreshDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the lastBackupDateTime property value. When the local administrator account credential was backed up to Azure Active Directory.
     * @return DateTime|null
    */
    public function getLastBackupDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastBackupDateTime');
    }

    /**
     * Gets the refreshDateTime property value. When the local administrator account credential will be refreshed and backed up to Azure Active Directory.
     * @return DateTime|null
    */
    public function getRefreshDateTime(): ?DateTime {
        return $this->getBackingStore()->get('refreshDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('credentials', $this->getCredentials());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeDateTimeValue('lastBackupDateTime', $this->getLastBackupDateTime());
        $writer->writeDateTimeValue('refreshDateTime', $this->getRefreshDateTime());
    }

    /**
     * Sets the credentials property value. The credentials of the device's local administrator account backed up to Azure Active Directory.
     * @param array<DeviceLocalCredential>|null $value Value to set for the credentials property.
    */
    public function setCredentials(?array $value): void {
        $this->getBackingStore()->set('credentials', $value);
    }

    /**
     * Sets the deviceName property value. Display name of the device that the local credentials are associated with.
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the lastBackupDateTime property value. When the local administrator account credential was backed up to Azure Active Directory.
     * @param DateTime|null $value Value to set for the lastBackupDateTime property.
    */
    public function setLastBackupDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastBackupDateTime', $value);
    }

    /**
     * Sets the refreshDateTime property value. When the local administrator account credential will be refreshed and backed up to Azure Active Directory.
     * @param DateTime|null $value Value to set for the refreshDateTime property.
    */
    public function setRefreshDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('refreshDateTime', $value);
    }

}
