<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Entity that describes tenant level settings for derived credentials
*/
class DeviceManagementDerivedCredentialSettings extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new deviceManagementDerivedCredentialSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementDerivedCredentialSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementDerivedCredentialSettings {
        return new DeviceManagementDerivedCredentialSettings();
    }

    /**
     * Gets the displayName property value. The display name for the profile.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'helpUrl' => fn(ParseNode $n) => $o->setHelpUrl($n->getStringValue()),
            'issuer' => fn(ParseNode $n) => $o->setIssuer($n->getEnumValue(DeviceManagementDerivedCredentialIssuer::class)),
            'notificationType' => fn(ParseNode $n) => $o->setNotificationType($n->getEnumValue(DeviceManagementDerivedCredentialNotificationType::class)),
            'renewalThresholdPercentage' => fn(ParseNode $n) => $o->setRenewalThresholdPercentage($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the helpUrl property value. The URL that will be accessible to end users as they retrieve a derived credential using the Company Portal.
     * @return string|null
    */
    public function getHelpUrl(): ?string {
        $val = $this->getBackingStore()->get('helpUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'helpUrl'");
    }

    /**
     * Gets the issuer property value. Supported values for the derived credential issuer.
     * @return DeviceManagementDerivedCredentialIssuer|null
    */
    public function getIssuer(): ?DeviceManagementDerivedCredentialIssuer {
        $val = $this->getBackingStore()->get('issuer');
        if (is_null($val) || $val instanceof DeviceManagementDerivedCredentialIssuer) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'issuer'");
    }

    /**
     * Gets the notificationType property value. Supported values for the notification type to use.
     * @return DeviceManagementDerivedCredentialNotificationType|null
    */
    public function getNotificationType(): ?DeviceManagementDerivedCredentialNotificationType {
        $val = $this->getBackingStore()->get('notificationType');
        if (is_null($val) || $val instanceof DeviceManagementDerivedCredentialNotificationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationType'");
    }

    /**
     * Gets the renewalThresholdPercentage property value. The nominal percentage of time before certificate renewal is initiated by the client.
     * @return int|null
    */
    public function getRenewalThresholdPercentage(): ?int {
        $val = $this->getBackingStore()->get('renewalThresholdPercentage');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'renewalThresholdPercentage'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('helpUrl', $this->getHelpUrl());
        $writer->writeEnumValue('issuer', $this->getIssuer());
        $writer->writeEnumValue('notificationType', $this->getNotificationType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('renewalThresholdPercentage', $this->getRenewalThresholdPercentage());
    }

    /**
     * Sets the displayName property value. The display name for the profile.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the helpUrl property value. The URL that will be accessible to end users as they retrieve a derived credential using the Company Portal.
     * @param string|null $value Value to set for the helpUrl property.
    */
    public function setHelpUrl(?string $value): void {
        $this->getBackingStore()->set('helpUrl', $value);
    }

    /**
     * Sets the issuer property value. Supported values for the derived credential issuer.
     * @param DeviceManagementDerivedCredentialIssuer|null $value Value to set for the issuer property.
    */
    public function setIssuer(?DeviceManagementDerivedCredentialIssuer $value): void {
        $this->getBackingStore()->set('issuer', $value);
    }

    /**
     * Sets the notificationType property value. Supported values for the notification type to use.
     * @param DeviceManagementDerivedCredentialNotificationType|null $value Value to set for the notificationType property.
    */
    public function setNotificationType(?DeviceManagementDerivedCredentialNotificationType $value): void {
        $this->getBackingStore()->set('notificationType', $value);
    }

    /**
     * Sets the renewalThresholdPercentage property value. The nominal percentage of time before certificate renewal is initiated by the client.
     * @param int|null $value Value to set for the renewalThresholdPercentage property.
    */
    public function setRenewalThresholdPercentage(?int $value): void {
        $this->getBackingStore()->set('renewalThresholdPercentage', $value);
    }

}
