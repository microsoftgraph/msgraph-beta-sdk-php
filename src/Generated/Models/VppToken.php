<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * You purchase multiple licenses for iOS apps through the Apple Volume Purchase Program for Business or Education. This involves setting up an Apple VPP account from the Apple website and uploading the Apple VPP Business or Education token to Intune. You can then synchronize your volume purchase information with Intune and track your volume-purchased app use. You can upload multiple Apple VPP Business or Education tokens.
*/
class VppToken extends Entity implements Parsable 
{
    /**
     * Instantiates a new VppToken and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VppToken
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VppToken {
        return new VppToken();
    }

    /**
     * Gets the appleId property value. The apple Id associated with the given Apple Volume Purchase Program Token.
     * @return string|null
    */
    public function getAppleId(): ?string {
        $val = $this->getBackingStore()->get('appleId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appleId'");
    }

    /**
     * Gets the automaticallyUpdateApps property value. Whether or not apps for the VPP token will be automatically updated.
     * @return bool|null
    */
    public function getAutomaticallyUpdateApps(): ?bool {
        $val = $this->getBackingStore()->get('automaticallyUpdateApps');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'automaticallyUpdateApps'");
    }

    /**
     * Gets the claimTokenManagementFromExternalMdm property value. Admin consent to allow claiming token management from external MDM.
     * @return bool|null
    */
    public function getClaimTokenManagementFromExternalMdm(): ?bool {
        $val = $this->getBackingStore()->get('claimTokenManagementFromExternalMdm');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'claimTokenManagementFromExternalMdm'");
    }

    /**
     * Gets the countryOrRegion property value. Whether or not apps for the VPP token will be automatically updated.
     * @return string|null
    */
    public function getCountryOrRegion(): ?string {
        $val = $this->getBackingStore()->get('countryOrRegion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countryOrRegion'");
    }

    /**
     * Gets the dataSharingConsentGranted property value. Consent granted for data sharing with the Apple Volume Purchase Program.
     * @return bool|null
    */
    public function getDataSharingConsentGranted(): ?bool {
        $val = $this->getBackingStore()->get('dataSharingConsentGranted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataSharingConsentGranted'");
    }

    /**
     * Gets the displayName property value. An admin specified token friendly name.
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
     * Gets the expirationDateTime property value. The expiration date time of the Apple Volume Purchase Program Token.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appleId' => fn(ParseNode $n) => $o->setAppleId($n->getStringValue()),
            'automaticallyUpdateApps' => fn(ParseNode $n) => $o->setAutomaticallyUpdateApps($n->getBooleanValue()),
            'claimTokenManagementFromExternalMdm' => fn(ParseNode $n) => $o->setClaimTokenManagementFromExternalMdm($n->getBooleanValue()),
            'countryOrRegion' => fn(ParseNode $n) => $o->setCountryOrRegion($n->getStringValue()),
            'dataSharingConsentGranted' => fn(ParseNode $n) => $o->setDataSharingConsentGranted($n->getBooleanValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'lastSyncDateTime' => fn(ParseNode $n) => $o->setLastSyncDateTime($n->getDateTimeValue()),
            'lastSyncStatus' => fn(ParseNode $n) => $o->setLastSyncStatus($n->getEnumValue(VppTokenSyncStatus::class)),
            'locationName' => fn(ParseNode $n) => $o->setLocationName($n->getStringValue()),
            'organizationName' => fn(ParseNode $n) => $o->setOrganizationName($n->getStringValue()),
            'roleScopeTagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoleScopeTagIds($val);
            },
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(VppTokenState::class)),
            'token' => fn(ParseNode $n) => $o->setToken($n->getStringValue()),
            'tokenActionResults' => fn(ParseNode $n) => $o->setTokenActionResults($n->getCollectionOfObjectValues([VppTokenActionResult::class, 'createFromDiscriminatorValue'])),
            'vppTokenAccountType' => fn(ParseNode $n) => $o->setVppTokenAccountType($n->getEnumValue(VppTokenAccountType::class)),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. Last modification date time associated with the Apple Volume Purchase Program Token.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the lastSyncDateTime property value. The last time when an application sync was done with the Apple volume purchase program service using the the Apple Volume Purchase Program Token.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastSyncDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSyncDateTime'");
    }

    /**
     * Gets the lastSyncStatus property value. Possible sync statuses associated with an Apple Volume Purchase Program token.
     * @return VppTokenSyncStatus|null
    */
    public function getLastSyncStatus(): ?VppTokenSyncStatus {
        $val = $this->getBackingStore()->get('lastSyncStatus');
        if (is_null($val) || $val instanceof VppTokenSyncStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSyncStatus'");
    }

    /**
     * Gets the locationName property value. Token location returned from Apple VPP.
     * @return string|null
    */
    public function getLocationName(): ?string {
        $val = $this->getBackingStore()->get('locationName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'locationName'");
    }

    /**
     * Gets the organizationName property value. The organization associated with the Apple Volume Purchase Program Token
     * @return string|null
    */
    public function getOrganizationName(): ?string {
        $val = $this->getBackingStore()->get('organizationName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organizationName'");
    }

    /**
     * Gets the roleScopeTagIds property value. Role Scope Tags IDs assigned to this entity.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        $val = $this->getBackingStore()->get('roleScopeTagIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleScopeTagIds'");
    }

    /**
     * Gets the state property value. Possible states associated with an Apple Volume Purchase Program token.
     * @return VppTokenState|null
    */
    public function getState(): ?VppTokenState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof VppTokenState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Gets the token property value. The Apple Volume Purchase Program Token string downloaded from the Apple Volume Purchase Program.
     * @return string|null
    */
    public function getToken(): ?string {
        $val = $this->getBackingStore()->get('token');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'token'");
    }

    /**
     * Gets the tokenActionResults property value. The collection of statuses of the actions performed on the Apple Volume Purchase Program Token.
     * @return array<VppTokenActionResult>|null
    */
    public function getTokenActionResults(): ?array {
        $val = $this->getBackingStore()->get('tokenActionResults');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VppTokenActionResult::class);
            /** @var array<VppTokenActionResult>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tokenActionResults'");
    }

    /**
     * Gets the vppTokenAccountType property value. Possible types of an Apple Volume Purchase Program token.
     * @return VppTokenAccountType|null
    */
    public function getVppTokenAccountType(): ?VppTokenAccountType {
        $val = $this->getBackingStore()->get('vppTokenAccountType');
        if (is_null($val) || $val instanceof VppTokenAccountType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vppTokenAccountType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appleId', $this->getAppleId());
        $writer->writeBooleanValue('automaticallyUpdateApps', $this->getAutomaticallyUpdateApps());
        $writer->writeBooleanValue('claimTokenManagementFromExternalMdm', $this->getClaimTokenManagementFromExternalMdm());
        $writer->writeStringValue('countryOrRegion', $this->getCountryOrRegion());
        $writer->writeBooleanValue('dataSharingConsentGranted', $this->getDataSharingConsentGranted());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeDateTimeValue('lastSyncDateTime', $this->getLastSyncDateTime());
        $writer->writeEnumValue('lastSyncStatus', $this->getLastSyncStatus());
        $writer->writeStringValue('locationName', $this->getLocationName());
        $writer->writeStringValue('organizationName', $this->getOrganizationName());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('token', $this->getToken());
        $writer->writeCollectionOfObjectValues('tokenActionResults', $this->getTokenActionResults());
        $writer->writeEnumValue('vppTokenAccountType', $this->getVppTokenAccountType());
    }

    /**
     * Sets the appleId property value. The apple Id associated with the given Apple Volume Purchase Program Token.
     * @param string|null $value Value to set for the appleId property.
    */
    public function setAppleId(?string $value): void {
        $this->getBackingStore()->set('appleId', $value);
    }

    /**
     * Sets the automaticallyUpdateApps property value. Whether or not apps for the VPP token will be automatically updated.
     * @param bool|null $value Value to set for the automaticallyUpdateApps property.
    */
    public function setAutomaticallyUpdateApps(?bool $value): void {
        $this->getBackingStore()->set('automaticallyUpdateApps', $value);
    }

    /**
     * Sets the claimTokenManagementFromExternalMdm property value. Admin consent to allow claiming token management from external MDM.
     * @param bool|null $value Value to set for the claimTokenManagementFromExternalMdm property.
    */
    public function setClaimTokenManagementFromExternalMdm(?bool $value): void {
        $this->getBackingStore()->set('claimTokenManagementFromExternalMdm', $value);
    }

    /**
     * Sets the countryOrRegion property value. Whether or not apps for the VPP token will be automatically updated.
     * @param string|null $value Value to set for the countryOrRegion property.
    */
    public function setCountryOrRegion(?string $value): void {
        $this->getBackingStore()->set('countryOrRegion', $value);
    }

    /**
     * Sets the dataSharingConsentGranted property value. Consent granted for data sharing with the Apple Volume Purchase Program.
     * @param bool|null $value Value to set for the dataSharingConsentGranted property.
    */
    public function setDataSharingConsentGranted(?bool $value): void {
        $this->getBackingStore()->set('dataSharingConsentGranted', $value);
    }

    /**
     * Sets the displayName property value. An admin specified token friendly name.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the expirationDateTime property value. The expiration date time of the Apple Volume Purchase Program Token.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Last modification date time associated with the Apple Volume Purchase Program Token.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the lastSyncDateTime property value. The last time when an application sync was done with the Apple volume purchase program service using the the Apple Volume Purchase Program Token.
     * @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSyncDateTime', $value);
    }

    /**
     * Sets the lastSyncStatus property value. Possible sync statuses associated with an Apple Volume Purchase Program token.
     * @param VppTokenSyncStatus|null $value Value to set for the lastSyncStatus property.
    */
    public function setLastSyncStatus(?VppTokenSyncStatus $value): void {
        $this->getBackingStore()->set('lastSyncStatus', $value);
    }

    /**
     * Sets the locationName property value. Token location returned from Apple VPP.
     * @param string|null $value Value to set for the locationName property.
    */
    public function setLocationName(?string $value): void {
        $this->getBackingStore()->set('locationName', $value);
    }

    /**
     * Sets the organizationName property value. The organization associated with the Apple Volume Purchase Program Token
     * @param string|null $value Value to set for the organizationName property.
    */
    public function setOrganizationName(?string $value): void {
        $this->getBackingStore()->set('organizationName', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. Role Scope Tags IDs assigned to this entity.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the state property value. Possible states associated with an Apple Volume Purchase Program token.
     * @param VppTokenState|null $value Value to set for the state property.
    */
    public function setState(?VppTokenState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the token property value. The Apple Volume Purchase Program Token string downloaded from the Apple Volume Purchase Program.
     * @param string|null $value Value to set for the token property.
    */
    public function setToken(?string $value): void {
        $this->getBackingStore()->set('token', $value);
    }

    /**
     * Sets the tokenActionResults property value. The collection of statuses of the actions performed on the Apple Volume Purchase Program Token.
     * @param array<VppTokenActionResult>|null $value Value to set for the tokenActionResults property.
    */
    public function setTokenActionResults(?array $value): void {
        $this->getBackingStore()->set('tokenActionResults', $value);
    }

    /**
     * Sets the vppTokenAccountType property value. Possible types of an Apple Volume Purchase Program token.
     * @param VppTokenAccountType|null $value Value to set for the vppTokenAccountType property.
    */
    public function setVppTokenAccountType(?VppTokenAccountType $value): void {
        $this->getBackingStore()->set('vppTokenAccountType', $value);
    }

}
