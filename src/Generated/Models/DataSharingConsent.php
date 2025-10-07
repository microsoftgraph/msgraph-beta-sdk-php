<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Data sharing consent information.
*/
class DataSharingConsent extends Entity implements Parsable 
{
    /**
     * Instantiates a new DataSharingConsent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DataSharingConsent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DataSharingConsent {
        return new DataSharingConsent();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'grantDateTime' => fn(ParseNode $n) => $o->setGrantDateTime($n->getDateTimeValue()),
            'granted' => fn(ParseNode $n) => $o->setGranted($n->getBooleanValue()),
            'grantedByUpn' => fn(ParseNode $n) => $o->setGrantedByUpn($n->getStringValue()),
            'grantedByUserId' => fn(ParseNode $n) => $o->setGrantedByUserId($n->getStringValue()),
            'serviceDisplayName' => fn(ParseNode $n) => $o->setServiceDisplayName($n->getStringValue()),
            'termsUrl' => fn(ParseNode $n) => $o->setTermsUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the grantDateTime property value. The time consent was granted for this account
     * @return DateTime|null
    */
    public function getGrantDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('grantDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'grantDateTime'");
    }

    /**
     * Gets the granted property value. The granted state for the data sharing consent
     * @return bool|null
    */
    public function getGranted(): ?bool {
        $val = $this->getBackingStore()->get('granted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'granted'");
    }

    /**
     * Gets the grantedByUpn property value. The Upn of the user that granted consent for this account
     * @return string|null
    */
    public function getGrantedByUpn(): ?string {
        $val = $this->getBackingStore()->get('grantedByUpn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'grantedByUpn'");
    }

    /**
     * Gets the grantedByUserId property value. The UserId of the user that granted consent for this account
     * @return string|null
    */
    public function getGrantedByUserId(): ?string {
        $val = $this->getBackingStore()->get('grantedByUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'grantedByUserId'");
    }

    /**
     * Gets the serviceDisplayName property value. The display name of the service work flow
     * @return string|null
    */
    public function getServiceDisplayName(): ?string {
        $val = $this->getBackingStore()->get('serviceDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceDisplayName'");
    }

    /**
     * Gets the termsUrl property value. The TermsUrl for the data sharing consent
     * @return string|null
    */
    public function getTermsUrl(): ?string {
        $val = $this->getBackingStore()->get('termsUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'termsUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('grantDateTime', $this->getGrantDateTime());
        $writer->writeBooleanValue('granted', $this->getGranted());
        $writer->writeStringValue('grantedByUpn', $this->getGrantedByUpn());
        $writer->writeStringValue('grantedByUserId', $this->getGrantedByUserId());
        $writer->writeStringValue('serviceDisplayName', $this->getServiceDisplayName());
        $writer->writeStringValue('termsUrl', $this->getTermsUrl());
    }

    /**
     * Sets the grantDateTime property value. The time consent was granted for this account
     * @param DateTime|null $value Value to set for the grantDateTime property.
    */
    public function setGrantDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('grantDateTime', $value);
    }

    /**
     * Sets the granted property value. The granted state for the data sharing consent
     * @param bool|null $value Value to set for the granted property.
    */
    public function setGranted(?bool $value): void {
        $this->getBackingStore()->set('granted', $value);
    }

    /**
     * Sets the grantedByUpn property value. The Upn of the user that granted consent for this account
     * @param string|null $value Value to set for the grantedByUpn property.
    */
    public function setGrantedByUpn(?string $value): void {
        $this->getBackingStore()->set('grantedByUpn', $value);
    }

    /**
     * Sets the grantedByUserId property value. The UserId of the user that granted consent for this account
     * @param string|null $value Value to set for the grantedByUserId property.
    */
    public function setGrantedByUserId(?string $value): void {
        $this->getBackingStore()->set('grantedByUserId', $value);
    }

    /**
     * Sets the serviceDisplayName property value. The display name of the service work flow
     * @param string|null $value Value to set for the serviceDisplayName property.
    */
    public function setServiceDisplayName(?string $value): void {
        $this->getBackingStore()->set('serviceDisplayName', $value);
    }

    /**
     * Sets the termsUrl property value. The TermsUrl for the data sharing consent
     * @param string|null $value Value to set for the termsUrl property.
    */
    public function setTermsUrl(?string $value): void {
        $this->getBackingStore()->set('termsUrl', $value);
    }

}
