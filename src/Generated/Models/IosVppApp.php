<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Contains properties and inherited properties for iOS Volume-Purchased Program (VPP) Apps.
*/
class IosVppApp extends MobileApp implements Parsable 
{
    /**
     * Instantiates a new IosVppApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosVppApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosVppApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosVppApp {
        return new IosVppApp();
    }

    /**
     * Gets the applicableDeviceType property value. The applicable iOS Device Type.
     * @return IosDeviceType|null
    */
    public function getApplicableDeviceType(): ?IosDeviceType {
        $val = $this->getBackingStore()->get('applicableDeviceType');
        if (is_null($val) || $val instanceof IosDeviceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicableDeviceType'");
    }

    /**
     * Gets the appStoreUrl property value. The store URL.
     * @return string|null
    */
    public function getAppStoreUrl(): ?string {
        $val = $this->getBackingStore()->get('appStoreUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appStoreUrl'");
    }

    /**
     * Gets the assignedLicenses property value. The licenses assigned to this app.
     * @return array<IosVppAppAssignedLicense>|null
    */
    public function getAssignedLicenses(): ?array {
        $val = $this->getBackingStore()->get('assignedLicenses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IosVppAppAssignedLicense::class);
            /** @var array<IosVppAppAssignedLicense>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedLicenses'");
    }

    /**
     * Gets the bundleId property value. The Identity Name.
     * @return string|null
    */
    public function getBundleId(): ?string {
        $val = $this->getBackingStore()->get('bundleId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bundleId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicableDeviceType' => fn(ParseNode $n) => $o->setApplicableDeviceType($n->getObjectValue([IosDeviceType::class, 'createFromDiscriminatorValue'])),
            'appStoreUrl' => fn(ParseNode $n) => $o->setAppStoreUrl($n->getStringValue()),
            'assignedLicenses' => fn(ParseNode $n) => $o->setAssignedLicenses($n->getCollectionOfObjectValues([IosVppAppAssignedLicense::class, 'createFromDiscriminatorValue'])),
            'bundleId' => fn(ParseNode $n) => $o->setBundleId($n->getStringValue()),
            'licensingType' => fn(ParseNode $n) => $o->setLicensingType($n->getObjectValue([VppLicensingType::class, 'createFromDiscriminatorValue'])),
            'releaseDateTime' => fn(ParseNode $n) => $o->setReleaseDateTime($n->getDateTimeValue()),
            'revokeLicenseActionResults' => fn(ParseNode $n) => $o->setRevokeLicenseActionResults($n->getCollectionOfObjectValues([IosVppAppRevokeLicensesActionResult::class, 'createFromDiscriminatorValue'])),
            'totalLicenseCount' => fn(ParseNode $n) => $o->setTotalLicenseCount($n->getIntegerValue()),
            'usedLicenseCount' => fn(ParseNode $n) => $o->setUsedLicenseCount($n->getIntegerValue()),
            'vppTokenAccountType' => fn(ParseNode $n) => $o->setVppTokenAccountType($n->getEnumValue(VppTokenAccountType::class)),
            'vppTokenAppleId' => fn(ParseNode $n) => $o->setVppTokenAppleId($n->getStringValue()),
            'vppTokenDisplayName' => fn(ParseNode $n) => $o->setVppTokenDisplayName($n->getStringValue()),
            'vppTokenId' => fn(ParseNode $n) => $o->setVppTokenId($n->getStringValue()),
            'vppTokenOrganizationName' => fn(ParseNode $n) => $o->setVppTokenOrganizationName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the licensingType property value. The supported License Type.
     * @return VppLicensingType|null
    */
    public function getLicensingType(): ?VppLicensingType {
        $val = $this->getBackingStore()->get('licensingType');
        if (is_null($val) || $val instanceof VppLicensingType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'licensingType'");
    }

    /**
     * Gets the releaseDateTime property value. The VPP application release date and time.
     * @return DateTime|null
    */
    public function getReleaseDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('releaseDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'releaseDateTime'");
    }

    /**
     * Gets the revokeLicenseActionResults property value. Results of revoke license actions on this app.
     * @return array<IosVppAppRevokeLicensesActionResult>|null
    */
    public function getRevokeLicenseActionResults(): ?array {
        $val = $this->getBackingStore()->get('revokeLicenseActionResults');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IosVppAppRevokeLicensesActionResult::class);
            /** @var array<IosVppAppRevokeLicensesActionResult>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'revokeLicenseActionResults'");
    }

    /**
     * Gets the totalLicenseCount property value. The total number of VPP licenses.
     * @return int|null
    */
    public function getTotalLicenseCount(): ?int {
        $val = $this->getBackingStore()->get('totalLicenseCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalLicenseCount'");
    }

    /**
     * Gets the usedLicenseCount property value. The number of VPP licenses in use.
     * @return int|null
    */
    public function getUsedLicenseCount(): ?int {
        $val = $this->getBackingStore()->get('usedLicenseCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usedLicenseCount'");
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
     * Gets the vppTokenAppleId property value. The Apple Id associated with the given Apple Volume Purchase Program Token.
     * @return string|null
    */
    public function getVppTokenAppleId(): ?string {
        $val = $this->getBackingStore()->get('vppTokenAppleId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vppTokenAppleId'");
    }

    /**
     * Gets the vppTokenDisplayName property value. Display name of the VPP token associated with this app.
     * @return string|null
    */
    public function getVppTokenDisplayName(): ?string {
        $val = $this->getBackingStore()->get('vppTokenDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vppTokenDisplayName'");
    }

    /**
     * Gets the vppTokenId property value. Identifier of the VPP token associated with this app.
     * @return string|null
    */
    public function getVppTokenId(): ?string {
        $val = $this->getBackingStore()->get('vppTokenId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vppTokenId'");
    }

    /**
     * Gets the vppTokenOrganizationName property value. The organization associated with the Apple Volume Purchase Program Token
     * @return string|null
    */
    public function getVppTokenOrganizationName(): ?string {
        $val = $this->getBackingStore()->get('vppTokenOrganizationName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vppTokenOrganizationName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('applicableDeviceType', $this->getApplicableDeviceType());
        $writer->writeStringValue('appStoreUrl', $this->getAppStoreUrl());
        $writer->writeCollectionOfObjectValues('assignedLicenses', $this->getAssignedLicenses());
        $writer->writeStringValue('bundleId', $this->getBundleId());
        $writer->writeObjectValue('licensingType', $this->getLicensingType());
        $writer->writeDateTimeValue('releaseDateTime', $this->getReleaseDateTime());
        $writer->writeCollectionOfObjectValues('revokeLicenseActionResults', $this->getRevokeLicenseActionResults());
        $writer->writeIntegerValue('totalLicenseCount', $this->getTotalLicenseCount());
        $writer->writeIntegerValue('usedLicenseCount', $this->getUsedLicenseCount());
        $writer->writeEnumValue('vppTokenAccountType', $this->getVppTokenAccountType());
        $writer->writeStringValue('vppTokenAppleId', $this->getVppTokenAppleId());
        $writer->writeStringValue('vppTokenDisplayName', $this->getVppTokenDisplayName());
        $writer->writeStringValue('vppTokenId', $this->getVppTokenId());
        $writer->writeStringValue('vppTokenOrganizationName', $this->getVppTokenOrganizationName());
    }

    /**
     * Sets the applicableDeviceType property value. The applicable iOS Device Type.
     * @param IosDeviceType|null $value Value to set for the applicableDeviceType property.
    */
    public function setApplicableDeviceType(?IosDeviceType $value): void {
        $this->getBackingStore()->set('applicableDeviceType', $value);
    }

    /**
     * Sets the appStoreUrl property value. The store URL.
     * @param string|null $value Value to set for the appStoreUrl property.
    */
    public function setAppStoreUrl(?string $value): void {
        $this->getBackingStore()->set('appStoreUrl', $value);
    }

    /**
     * Sets the assignedLicenses property value. The licenses assigned to this app.
     * @param array<IosVppAppAssignedLicense>|null $value Value to set for the assignedLicenses property.
    */
    public function setAssignedLicenses(?array $value): void {
        $this->getBackingStore()->set('assignedLicenses', $value);
    }

    /**
     * Sets the bundleId property value. The Identity Name.
     * @param string|null $value Value to set for the bundleId property.
    */
    public function setBundleId(?string $value): void {
        $this->getBackingStore()->set('bundleId', $value);
    }

    /**
     * Sets the licensingType property value. The supported License Type.
     * @param VppLicensingType|null $value Value to set for the licensingType property.
    */
    public function setLicensingType(?VppLicensingType $value): void {
        $this->getBackingStore()->set('licensingType', $value);
    }

    /**
     * Sets the releaseDateTime property value. The VPP application release date and time.
     * @param DateTime|null $value Value to set for the releaseDateTime property.
    */
    public function setReleaseDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('releaseDateTime', $value);
    }

    /**
     * Sets the revokeLicenseActionResults property value. Results of revoke license actions on this app.
     * @param array<IosVppAppRevokeLicensesActionResult>|null $value Value to set for the revokeLicenseActionResults property.
    */
    public function setRevokeLicenseActionResults(?array $value): void {
        $this->getBackingStore()->set('revokeLicenseActionResults', $value);
    }

    /**
     * Sets the totalLicenseCount property value. The total number of VPP licenses.
     * @param int|null $value Value to set for the totalLicenseCount property.
    */
    public function setTotalLicenseCount(?int $value): void {
        $this->getBackingStore()->set('totalLicenseCount', $value);
    }

    /**
     * Sets the usedLicenseCount property value. The number of VPP licenses in use.
     * @param int|null $value Value to set for the usedLicenseCount property.
    */
    public function setUsedLicenseCount(?int $value): void {
        $this->getBackingStore()->set('usedLicenseCount', $value);
    }

    /**
     * Sets the vppTokenAccountType property value. Possible types of an Apple Volume Purchase Program token.
     * @param VppTokenAccountType|null $value Value to set for the vppTokenAccountType property.
    */
    public function setVppTokenAccountType(?VppTokenAccountType $value): void {
        $this->getBackingStore()->set('vppTokenAccountType', $value);
    }

    /**
     * Sets the vppTokenAppleId property value. The Apple Id associated with the given Apple Volume Purchase Program Token.
     * @param string|null $value Value to set for the vppTokenAppleId property.
    */
    public function setVppTokenAppleId(?string $value): void {
        $this->getBackingStore()->set('vppTokenAppleId', $value);
    }

    /**
     * Sets the vppTokenDisplayName property value. Display name of the VPP token associated with this app.
     * @param string|null $value Value to set for the vppTokenDisplayName property.
    */
    public function setVppTokenDisplayName(?string $value): void {
        $this->getBackingStore()->set('vppTokenDisplayName', $value);
    }

    /**
     * Sets the vppTokenId property value. Identifier of the VPP token associated with this app.
     * @param string|null $value Value to set for the vppTokenId property.
    */
    public function setVppTokenId(?string $value): void {
        $this->getBackingStore()->set('vppTokenId', $value);
    }

    /**
     * Sets the vppTokenOrganizationName property value. The organization associated with the Apple Volume Purchase Program Token
     * @param string|null $value Value to set for the vppTokenOrganizationName property.
    */
    public function setVppTokenOrganizationName(?string $value): void {
        $this->getBackingStore()->set('vppTokenOrganizationName', $value);
    }

}
