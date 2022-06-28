<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobilityManagementPolicy extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var PolicyScope|null $appliesTo Indicates the user scope of the mobility management policy. Possible values are: none, all, selected.
    */
    private ?PolicyScope $appliesTo = null;
    
    /**
     * @var string|null $complianceUrl Compliance URL of the mobility management application.
    */
    private ?string $complianceUrl = null;
    
    /**
     * @var string|null $description Description of the mobility management application.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $discoveryUrl Discovery URL of the mobility management application.
    */
    private ?string $discoveryUrl = null;
    
    /**
     * @var string|null $displayName Display name of the mobility management application.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<Group>|null $includedGroups Azure AD groups under the scope of the mobility management application if appliesTo is selected
    */
    private ?array $includedGroups = null;
    
    /**
     * @var bool|null $isValid Whether policy is valid. Invalid policies may not be updated and should be deleted.
    */
    private ?bool $isValid = null;
    
    /**
     * @var string|null $termsOfUseUrl Terms of Use URL of the mobility management application.
    */
    private ?string $termsOfUseUrl = null;
    
    /**
     * Instantiates a new MobilityManagementPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobilityManagementPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobilityManagementPolicy {
        return new MobilityManagementPolicy();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appliesTo property value. Indicates the user scope of the mobility management policy. Possible values are: none, all, selected.
     * @return PolicyScope|null
    */
    public function getAppliesTo(): ?PolicyScope {
        return $this->appliesTo;
    }

    /**
     * Gets the complianceUrl property value. Compliance URL of the mobility management application.
     * @return string|null
    */
    public function getComplianceUrl(): ?string {
        return $this->complianceUrl;
    }

    /**
     * Gets the description property value. Description of the mobility management application.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the discoveryUrl property value. Discovery URL of the mobility management application.
     * @return string|null
    */
    public function getDiscoveryUrl(): ?string {
        return $this->discoveryUrl;
    }

    /**
     * Gets the displayName property value. Display name of the mobility management application.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appliesTo' => function (ParseNode $n) use ($o) { $o->setAppliesTo($n->getEnumValue(PolicyScope::class)); },
            'complianceUrl' => function (ParseNode $n) use ($o) { $o->setComplianceUrl($n->getStringValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'discoveryUrl' => function (ParseNode $n) use ($o) { $o->setDiscoveryUrl($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'includedGroups' => function (ParseNode $n) use ($o) { $o->setIncludedGroups($n->getCollectionOfObjectValues(array(Group::class, 'createFromDiscriminatorValue'))); },
            'isValid' => function (ParseNode $n) use ($o) { $o->setIsValid($n->getBooleanValue()); },
            'termsOfUseUrl' => function (ParseNode $n) use ($o) { $o->setTermsOfUseUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the includedGroups property value. Azure AD groups under the scope of the mobility management application if appliesTo is selected
     * @return array<Group>|null
    */
    public function getIncludedGroups(): ?array {
        return $this->includedGroups;
    }

    /**
     * Gets the isValid property value. Whether policy is valid. Invalid policies may not be updated and should be deleted.
     * @return bool|null
    */
    public function getIsValid(): ?bool {
        return $this->isValid;
    }

    /**
     * Gets the termsOfUseUrl property value. Terms of Use URL of the mobility management application.
     * @return string|null
    */
    public function getTermsOfUseUrl(): ?string {
        return $this->termsOfUseUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('appliesTo', $this->appliesTo);
        $writer->writeStringValue('complianceUrl', $this->complianceUrl);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('discoveryUrl', $this->discoveryUrl);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('includedGroups', $this->includedGroups);
        $writer->writeBooleanValue('isValid', $this->isValid);
        $writer->writeStringValue('termsOfUseUrl', $this->termsOfUseUrl);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the appliesTo property value. Indicates the user scope of the mobility management policy. Possible values are: none, all, selected.
     *  @param PolicyScope|null $value Value to set for the appliesTo property.
    */
    public function setAppliesTo(?PolicyScope $value ): void {
        $this->appliesTo = $value;
    }

    /**
     * Sets the complianceUrl property value. Compliance URL of the mobility management application.
     *  @param string|null $value Value to set for the complianceUrl property.
    */
    public function setComplianceUrl(?string $value ): void {
        $this->complianceUrl = $value;
    }

    /**
     * Sets the description property value. Description of the mobility management application.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the discoveryUrl property value. Discovery URL of the mobility management application.
     *  @param string|null $value Value to set for the discoveryUrl property.
    */
    public function setDiscoveryUrl(?string $value ): void {
        $this->discoveryUrl = $value;
    }

    /**
     * Sets the displayName property value. Display name of the mobility management application.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the includedGroups property value. Azure AD groups under the scope of the mobility management application if appliesTo is selected
     *  @param array<Group>|null $value Value to set for the includedGroups property.
    */
    public function setIncludedGroups(?array $value ): void {
        $this->includedGroups = $value;
    }

    /**
     * Sets the isValid property value. Whether policy is valid. Invalid policies may not be updated and should be deleted.
     *  @param bool|null $value Value to set for the isValid property.
    */
    public function setIsValid(?bool $value ): void {
        $this->isValid = $value;
    }

    /**
     * Sets the termsOfUseUrl property value. Terms of Use URL of the mobility management application.
     *  @param string|null $value Value to set for the termsOfUseUrl property.
    */
    public function setTermsOfUseUrl(?string $value ): void {
        $this->termsOfUseUrl = $value;
    }

}
