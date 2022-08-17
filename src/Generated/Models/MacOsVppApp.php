<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOsVppApp extends MobileApp implements Parsable 
{
    /**
     * @var string|null $appStoreUrl The store URL.
    */
    private ?string $appStoreUrl = null;
    
    /**
     * @var array<MacOsVppAppAssignedLicense>|null $assignedLicenses The licenses assigned to this app.
    */
    private ?array $assignedLicenses = null;
    
    /**
     * @var string|null $bundleId The Identity Name.
    */
    private ?string $bundleId = null;
    
    /**
     * @var VppLicensingType|null $licensingType The supported License Type.
    */
    private ?VppLicensingType $licensingType = null;
    
    /**
     * @var DateTime|null $releaseDateTime The VPP application release date and time.
    */
    private ?DateTime $releaseDateTime = null;
    
    /**
     * @var array<MacOsVppAppRevokeLicensesActionResult>|null $revokeLicenseActionResults Results of revoke license actions on this app.
    */
    private ?array $revokeLicenseActionResults = null;
    
    /**
     * @var int|null $totalLicenseCount The total number of VPP licenses.
    */
    private ?int $totalLicenseCount = null;
    
    /**
     * @var int|null $usedLicenseCount The number of VPP licenses in use.
    */
    private ?int $usedLicenseCount = null;
    
    /**
     * @var VppTokenAccountType|null $vppTokenAccountType Possible types of an Apple Volume Purchase Program token.
    */
    private ?VppTokenAccountType $vppTokenAccountType = null;
    
    /**
     * @var string|null $vppTokenAppleId The Apple Id associated with the given Apple Volume Purchase Program Token.
    */
    private ?string $vppTokenAppleId = null;
    
    /**
     * @var string|null $vppTokenId Identifier of the VPP token associated with this app.
    */
    private ?string $vppTokenId = null;
    
    /**
     * @var string|null $vppTokenOrganizationName The organization associated with the Apple Volume Purchase Program Token
    */
    private ?string $vppTokenOrganizationName = null;
    
    /**
     * Instantiates a new MacOsVppApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOsVppApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOsVppApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOsVppApp {
        return new MacOsVppApp();
    }

    /**
     * Gets the appStoreUrl property value. The store URL.
     * @return string|null
    */
    public function getAppStoreUrl(): ?string {
        return $this->appStoreUrl;
    }

    /**
     * Gets the assignedLicenses property value. The licenses assigned to this app.
     * @return array<MacOsVppAppAssignedLicense>|null
    */
    public function getAssignedLicenses(): ?array {
        return $this->assignedLicenses;
    }

    /**
     * Gets the bundleId property value. The Identity Name.
     * @return string|null
    */
    public function getBundleId(): ?string {
        return $this->bundleId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appStoreUrl' => function (ParseNode $n) use ($o) { $o->setAppStoreUrl($n->getStringValue()); },
            'assignedLicenses' => function (ParseNode $n) use ($o) { $o->setAssignedLicenses($n->getCollectionOfObjectValues(array(MacOsVppAppAssignedLicense::class, 'createFromDiscriminatorValue'))); },
            'bundleId' => function (ParseNode $n) use ($o) { $o->setBundleId($n->getStringValue()); },
            'licensingType' => function (ParseNode $n) use ($o) { $o->setLicensingType($n->getObjectValue(array(VppLicensingType::class, 'createFromDiscriminatorValue'))); },
            'releaseDateTime' => function (ParseNode $n) use ($o) { $o->setReleaseDateTime($n->getDateTimeValue()); },
            'revokeLicenseActionResults' => function (ParseNode $n) use ($o) { $o->setRevokeLicenseActionResults($n->getCollectionOfObjectValues(array(MacOsVppAppRevokeLicensesActionResult::class, 'createFromDiscriminatorValue'))); },
            'totalLicenseCount' => function (ParseNode $n) use ($o) { $o->setTotalLicenseCount($n->getIntegerValue()); },
            'usedLicenseCount' => function (ParseNode $n) use ($o) { $o->setUsedLicenseCount($n->getIntegerValue()); },
            'vppTokenAccountType' => function (ParseNode $n) use ($o) { $o->setVppTokenAccountType($n->getEnumValue(VppTokenAccountType::class)); },
            'vppTokenAppleId' => function (ParseNode $n) use ($o) { $o->setVppTokenAppleId($n->getStringValue()); },
            'vppTokenId' => function (ParseNode $n) use ($o) { $o->setVppTokenId($n->getStringValue()); },
            'vppTokenOrganizationName' => function (ParseNode $n) use ($o) { $o->setVppTokenOrganizationName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the licensingType property value. The supported License Type.
     * @return VppLicensingType|null
    */
    public function getLicensingType(): ?VppLicensingType {
        return $this->licensingType;
    }

    /**
     * Gets the releaseDateTime property value. The VPP application release date and time.
     * @return DateTime|null
    */
    public function getReleaseDateTime(): ?DateTime {
        return $this->releaseDateTime;
    }

    /**
     * Gets the revokeLicenseActionResults property value. Results of revoke license actions on this app.
     * @return array<MacOsVppAppRevokeLicensesActionResult>|null
    */
    public function getRevokeLicenseActionResults(): ?array {
        return $this->revokeLicenseActionResults;
    }

    /**
     * Gets the totalLicenseCount property value. The total number of VPP licenses.
     * @return int|null
    */
    public function getTotalLicenseCount(): ?int {
        return $this->totalLicenseCount;
    }

    /**
     * Gets the usedLicenseCount property value. The number of VPP licenses in use.
     * @return int|null
    */
    public function getUsedLicenseCount(): ?int {
        return $this->usedLicenseCount;
    }

    /**
     * Gets the vppTokenAccountType property value. Possible types of an Apple Volume Purchase Program token.
     * @return VppTokenAccountType|null
    */
    public function getVppTokenAccountType(): ?VppTokenAccountType {
        return $this->vppTokenAccountType;
    }

    /**
     * Gets the vppTokenAppleId property value. The Apple Id associated with the given Apple Volume Purchase Program Token.
     * @return string|null
    */
    public function getVppTokenAppleId(): ?string {
        return $this->vppTokenAppleId;
    }

    /**
     * Gets the vppTokenId property value. Identifier of the VPP token associated with this app.
     * @return string|null
    */
    public function getVppTokenId(): ?string {
        return $this->vppTokenId;
    }

    /**
     * Gets the vppTokenOrganizationName property value. The organization associated with the Apple Volume Purchase Program Token
     * @return string|null
    */
    public function getVppTokenOrganizationName(): ?string {
        return $this->vppTokenOrganizationName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appStoreUrl', $this->appStoreUrl);
        $writer->writeCollectionOfObjectValues('assignedLicenses', $this->assignedLicenses);
        $writer->writeStringValue('bundleId', $this->bundleId);
        $writer->writeObjectValue('licensingType', $this->licensingType);
        $writer->writeDateTimeValue('releaseDateTime', $this->releaseDateTime);
        $writer->writeCollectionOfObjectValues('revokeLicenseActionResults', $this->revokeLicenseActionResults);
        $writer->writeIntegerValue('totalLicenseCount', $this->totalLicenseCount);
        $writer->writeIntegerValue('usedLicenseCount', $this->usedLicenseCount);
        $writer->writeEnumValue('vppTokenAccountType', $this->vppTokenAccountType);
        $writer->writeStringValue('vppTokenAppleId', $this->vppTokenAppleId);
        $writer->writeStringValue('vppTokenId', $this->vppTokenId);
        $writer->writeStringValue('vppTokenOrganizationName', $this->vppTokenOrganizationName);
    }

    /**
     * Sets the appStoreUrl property value. The store URL.
     *  @param string|null $value Value to set for the appStoreUrl property.
    */
    public function setAppStoreUrl(?string $value ): void {
        $this->appStoreUrl = $value;
    }

    /**
     * Sets the assignedLicenses property value. The licenses assigned to this app.
     *  @param array<MacOsVppAppAssignedLicense>|null $value Value to set for the assignedLicenses property.
    */
    public function setAssignedLicenses(?array $value ): void {
        $this->assignedLicenses = $value;
    }

    /**
     * Sets the bundleId property value. The Identity Name.
     *  @param string|null $value Value to set for the bundleId property.
    */
    public function setBundleId(?string $value ): void {
        $this->bundleId = $value;
    }

    /**
     * Sets the licensingType property value. The supported License Type.
     *  @param VppLicensingType|null $value Value to set for the licensingType property.
    */
    public function setLicensingType(?VppLicensingType $value ): void {
        $this->licensingType = $value;
    }

    /**
     * Sets the releaseDateTime property value. The VPP application release date and time.
     *  @param DateTime|null $value Value to set for the releaseDateTime property.
    */
    public function setReleaseDateTime(?DateTime $value ): void {
        $this->releaseDateTime = $value;
    }

    /**
     * Sets the revokeLicenseActionResults property value. Results of revoke license actions on this app.
     *  @param array<MacOsVppAppRevokeLicensesActionResult>|null $value Value to set for the revokeLicenseActionResults property.
    */
    public function setRevokeLicenseActionResults(?array $value ): void {
        $this->revokeLicenseActionResults = $value;
    }

    /**
     * Sets the totalLicenseCount property value. The total number of VPP licenses.
     *  @param int|null $value Value to set for the totalLicenseCount property.
    */
    public function setTotalLicenseCount(?int $value ): void {
        $this->totalLicenseCount = $value;
    }

    /**
     * Sets the usedLicenseCount property value. The number of VPP licenses in use.
     *  @param int|null $value Value to set for the usedLicenseCount property.
    */
    public function setUsedLicenseCount(?int $value ): void {
        $this->usedLicenseCount = $value;
    }

    /**
     * Sets the vppTokenAccountType property value. Possible types of an Apple Volume Purchase Program token.
     *  @param VppTokenAccountType|null $value Value to set for the vppTokenAccountType property.
    */
    public function setVppTokenAccountType(?VppTokenAccountType $value ): void {
        $this->vppTokenAccountType = $value;
    }

    /**
     * Sets the vppTokenAppleId property value. The Apple Id associated with the given Apple Volume Purchase Program Token.
     *  @param string|null $value Value to set for the vppTokenAppleId property.
    */
    public function setVppTokenAppleId(?string $value ): void {
        $this->vppTokenAppleId = $value;
    }

    /**
     * Sets the vppTokenId property value. Identifier of the VPP token associated with this app.
     *  @param string|null $value Value to set for the vppTokenId property.
    */
    public function setVppTokenId(?string $value ): void {
        $this->vppTokenId = $value;
    }

    /**
     * Sets the vppTokenOrganizationName property value. The organization associated with the Apple Volume Purchase Program Token
     *  @param string|null $value Value to set for the vppTokenOrganizationName property.
    */
    public function setVppTokenOrganizationName(?string $value ): void {
        $this->vppTokenOrganizationName = $value;
    }

}
