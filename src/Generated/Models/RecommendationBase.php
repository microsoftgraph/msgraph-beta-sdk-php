<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RecommendationBase extends Entity implements Parsable 
{
    /**
     * Instantiates a new RecommendationBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecommendationBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecommendationBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.recommendation': return new Recommendation();
            }
        }
        return new RecommendationBase();
    }

    /**
     * Gets the actionSteps property value. List of actions to take to complete a recommendation.
     * @return array<ActionStep>|null
    */
    public function getActionSteps(): ?array {
        $val = $this->getBackingStore()->get('actionSteps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ActionStep::class);
            /** @var array<ActionStep>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionSteps'");
    }

    /**
     * Gets the benefits property value. An explanation of why completing the recommendation will benefit you. Corresponds to the Value section of a recommendation shown in the Microsoft Entra admin center.
     * @return string|null
    */
    public function getBenefits(): ?string {
        $val = $this->getBackingStore()->get('benefits');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'benefits'");
    }

    /**
     * Gets the category property value. The category property
     * @return RecommendationCategory|null
    */
    public function getCategory(): ?RecommendationCategory {
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || $val instanceof RecommendationCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * Gets the createdDateTime property value. The date and time when the recommendation was detected as applicable to your directory.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the currentScore property value. The number of points the tenant has attained. Only applies to recommendations with category set to identitySecureScore.
     * @return float|null
    */
    public function getCurrentScore(): ?float {
        $val = $this->getBackingStore()->get('currentScore');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'currentScore'");
    }

    /**
     * Gets the displayName property value. The title of the recommendation.
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
     * Gets the featureAreas property value. The directory feature that the recommendation is related to.
     * @return array<RecommendationFeatureAreas>|null
    */
    public function getFeatureAreas(): ?array {
        $val = $this->getBackingStore()->get('featureAreas');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RecommendationFeatureAreas::class);
            /** @var array<RecommendationFeatureAreas>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'featureAreas'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionSteps' => fn(ParseNode $n) => $o->setActionSteps($n->getCollectionOfObjectValues([ActionStep::class, 'createFromDiscriminatorValue'])),
            'benefits' => fn(ParseNode $n) => $o->setBenefits($n->getStringValue()),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(RecommendationCategory::class)),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'currentScore' => fn(ParseNode $n) => $o->setCurrentScore($n->getFloatValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'featureAreas' => fn(ParseNode $n) => $o->setFeatureAreas($n->getCollectionOfEnumValues(RecommendationFeatureAreas::class)),
            'impactedResources' => fn(ParseNode $n) => $o->setImpactedResources($n->getCollectionOfObjectValues([ImpactedResource::class, 'createFromDiscriminatorValue'])),
            'impactStartDateTime' => fn(ParseNode $n) => $o->setImpactStartDateTime($n->getDateTimeValue()),
            'impactType' => fn(ParseNode $n) => $o->setImpactType($n->getStringValue()),
            'insights' => fn(ParseNode $n) => $o->setInsights($n->getStringValue()),
            'lastCheckedDateTime' => fn(ParseNode $n) => $o->setLastCheckedDateTime($n->getDateTimeValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'maxScore' => fn(ParseNode $n) => $o->setMaxScore($n->getFloatValue()),
            'postponeUntilDateTime' => fn(ParseNode $n) => $o->setPostponeUntilDateTime($n->getDateTimeValue()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getEnumValue(RecommendationPriority::class)),
            'recommendationType' => fn(ParseNode $n) => $o->setRecommendationType($n->getEnumValue(RecommendationType::class)),
            'releaseType' => fn(ParseNode $n) => $o->setReleaseType($n->getStringValue()),
            'remediationImpact' => fn(ParseNode $n) => $o->setRemediationImpact($n->getStringValue()),
            'requiredLicenses' => fn(ParseNode $n) => $o->setRequiredLicenses($n->getEnumValue(RequiredLicenses::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(RecommendationStatus::class)),
        ]);
    }

    /**
     * Gets the impactedResources property value. The list of directory objects associated with the recommendation.
     * @return array<ImpactedResource>|null
    */
    public function getImpactedResources(): ?array {
        $val = $this->getBackingStore()->get('impactedResources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ImpactedResource::class);
            /** @var array<ImpactedResource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'impactedResources'");
    }

    /**
     * Gets the impactStartDateTime property value. The future date and time when a recommendation should be completed.
     * @return DateTime|null
    */
    public function getImpactStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('impactStartDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'impactStartDateTime'");
    }

    /**
     * Gets the impactType property value. Indicates the scope of impact of a recommendation. tenantLevel indicates that the recommendation impacts the whole tenant. Other possible values include users, apps.
     * @return string|null
    */
    public function getImpactType(): ?string {
        $val = $this->getBackingStore()->get('impactType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'impactType'");
    }

    /**
     * Gets the insights property value. Describes why a recommendation uniquely applies to your directory. Corresponds to the Description section of a recommendation shown in the Microsoft Entra admin center.
     * @return string|null
    */
    public function getInsights(): ?string {
        $val = $this->getBackingStore()->get('insights');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'insights'");
    }

    /**
     * Gets the lastCheckedDateTime property value. The most recent date and time a recommendation was deemed applicable to your directory.
     * @return DateTime|null
    */
    public function getLastCheckedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastCheckedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastCheckedDateTime'");
    }

    /**
     * Gets the lastModifiedBy property value. Name of the user who last updated the status of the recommendation.
     * @return string|null
    */
    public function getLastModifiedBy(): ?string {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the status of a recommendation was last updated.
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
     * Gets the maxScore property value. The maximum number of points attainable. Only applies to recommendations with category set to identitySecureScore.
     * @return float|null
    */
    public function getMaxScore(): ?float {
        $val = $this->getBackingStore()->get('maxScore');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxScore'");
    }

    /**
     * Gets the postponeUntilDateTime property value. The future date and time when the status of a postponed recommendation will be active again.
     * @return DateTime|null
    */
    public function getPostponeUntilDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('postponeUntilDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'postponeUntilDateTime'");
    }

    /**
     * Gets the priority property value. The priority property
     * @return RecommendationPriority|null
    */
    public function getPriority(): ?RecommendationPriority {
        $val = $this->getBackingStore()->get('priority');
        if (is_null($val) || $val instanceof RecommendationPriority) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'priority'");
    }

    /**
     * Gets the recommendationType property value. Friendly shortname to identify the recommendation. The possible values are: adfsAppsMigration, enableDesktopSSO, enablePHS, enableProvisioning, switchFromPerUserMFA, tenantMFA, thirdPartyApps, turnOffPerUserMFA, useAuthenticatorApp, useMyApps, staleApps, staleAppCreds, applicationCredentialExpiry, servicePrincipalKeyExpiry, adminMFAV2, blockLegacyAuthentication, integratedApps, mfaRegistrationV2, pwagePolicyNew, passwordHashSync, oneAdmin, roleOverlap, selfServicePasswordReset, signinRiskPolicy, userRiskPolicy, verifyAppPublisher, privateLinkForAAD, appRoleAssignmentsGroups, appRoleAssignmentsUsers, managedIdentity, overprivilegedApps, unknownFutureValue, longLivedCredentials, aadConnectDeprecated, adalToMsalMigration, ownerlessApps, inactiveGuests, aadGraphDeprecationApplication, aadGraphDeprecationServicePrincipal, mfaServerDeprecation. Use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: longLivedCredentials , aadConnectDeprecated , adalToMsalMigration , ownerlessApps , inactiveGuests , aadGraphDeprecationApplication , aadGraphDeprecationServicePrincipal , mfaServerDeprecation.
     * @return RecommendationType|null
    */
    public function getRecommendationType(): ?RecommendationType {
        $val = $this->getBackingStore()->get('recommendationType');
        if (is_null($val) || $val instanceof RecommendationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recommendationType'");
    }

    /**
     * Gets the releaseType property value. The current release type of the recommendation. The possible values are: preview, generallyAvailable, unknownFutureValue.
     * @return string|null
    */
    public function getReleaseType(): ?string {
        $val = $this->getBackingStore()->get('releaseType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'releaseType'");
    }

    /**
     * Gets the remediationImpact property value. Description of the impact on users of the remediation. Only applies to recommendations with category set to identitySecureScore.
     * @return string|null
    */
    public function getRemediationImpact(): ?string {
        $val = $this->getBackingStore()->get('remediationImpact');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remediationImpact'");
    }

    /**
     * Gets the requiredLicenses property value. The required licenses to view the recommendation. The possible values are: notApplicable, microsoftEntraIdFree, microsoftEntraIdP1, microsoftEntraIdP2, microsoftEntraIdGovernance, microsoftEntraWorkloadId, unknownFutureValue.
     * @return RequiredLicenses|null
    */
    public function getRequiredLicenses(): ?RequiredLicenses {
        $val = $this->getBackingStore()->get('requiredLicenses');
        if (is_null($val) || $val instanceof RequiredLicenses) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requiredLicenses'");
    }

    /**
     * Gets the status property value. The status property
     * @return RecommendationStatus|null
    */
    public function getStatus(): ?RecommendationStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof RecommendationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('actionSteps', $this->getActionSteps());
        $writer->writeStringValue('benefits', $this->getBenefits());
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeFloatValue('currentScore', $this->getCurrentScore());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfEnumValues('featureAreas', $this->getFeatureAreas());
        $writer->writeCollectionOfObjectValues('impactedResources', $this->getImpactedResources());
        $writer->writeDateTimeValue('impactStartDateTime', $this->getImpactStartDateTime());
        $writer->writeStringValue('impactType', $this->getImpactType());
        $writer->writeStringValue('insights', $this->getInsights());
        $writer->writeDateTimeValue('lastCheckedDateTime', $this->getLastCheckedDateTime());
        $writer->writeStringValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeFloatValue('maxScore', $this->getMaxScore());
        $writer->writeDateTimeValue('postponeUntilDateTime', $this->getPostponeUntilDateTime());
        $writer->writeEnumValue('priority', $this->getPriority());
        $writer->writeEnumValue('recommendationType', $this->getRecommendationType());
        $writer->writeStringValue('releaseType', $this->getReleaseType());
        $writer->writeStringValue('remediationImpact', $this->getRemediationImpact());
        $writer->writeEnumValue('requiredLicenses', $this->getRequiredLicenses());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the actionSteps property value. List of actions to take to complete a recommendation.
     * @param array<ActionStep>|null $value Value to set for the actionSteps property.
    */
    public function setActionSteps(?array $value): void {
        $this->getBackingStore()->set('actionSteps', $value);
    }

    /**
     * Sets the benefits property value. An explanation of why completing the recommendation will benefit you. Corresponds to the Value section of a recommendation shown in the Microsoft Entra admin center.
     * @param string|null $value Value to set for the benefits property.
    */
    public function setBenefits(?string $value): void {
        $this->getBackingStore()->set('benefits', $value);
    }

    /**
     * Sets the category property value. The category property
     * @param RecommendationCategory|null $value Value to set for the category property.
    */
    public function setCategory(?RecommendationCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the recommendation was detected as applicable to your directory.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the currentScore property value. The number of points the tenant has attained. Only applies to recommendations with category set to identitySecureScore.
     * @param float|null $value Value to set for the currentScore property.
    */
    public function setCurrentScore(?float $value): void {
        $this->getBackingStore()->set('currentScore', $value);
    }

    /**
     * Sets the displayName property value. The title of the recommendation.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the featureAreas property value. The directory feature that the recommendation is related to.
     * @param array<RecommendationFeatureAreas>|null $value Value to set for the featureAreas property.
    */
    public function setFeatureAreas(?array $value): void {
        $this->getBackingStore()->set('featureAreas', $value);
    }

    /**
     * Sets the impactedResources property value. The list of directory objects associated with the recommendation.
     * @param array<ImpactedResource>|null $value Value to set for the impactedResources property.
    */
    public function setImpactedResources(?array $value): void {
        $this->getBackingStore()->set('impactedResources', $value);
    }

    /**
     * Sets the impactStartDateTime property value. The future date and time when a recommendation should be completed.
     * @param DateTime|null $value Value to set for the impactStartDateTime property.
    */
    public function setImpactStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('impactStartDateTime', $value);
    }

    /**
     * Sets the impactType property value. Indicates the scope of impact of a recommendation. tenantLevel indicates that the recommendation impacts the whole tenant. Other possible values include users, apps.
     * @param string|null $value Value to set for the impactType property.
    */
    public function setImpactType(?string $value): void {
        $this->getBackingStore()->set('impactType', $value);
    }

    /**
     * Sets the insights property value. Describes why a recommendation uniquely applies to your directory. Corresponds to the Description section of a recommendation shown in the Microsoft Entra admin center.
     * @param string|null $value Value to set for the insights property.
    */
    public function setInsights(?string $value): void {
        $this->getBackingStore()->set('insights', $value);
    }

    /**
     * Sets the lastCheckedDateTime property value. The most recent date and time a recommendation was deemed applicable to your directory.
     * @param DateTime|null $value Value to set for the lastCheckedDateTime property.
    */
    public function setLastCheckedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastCheckedDateTime', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Name of the user who last updated the status of the recommendation.
     * @param string|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?string $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the status of a recommendation was last updated.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the maxScore property value. The maximum number of points attainable. Only applies to recommendations with category set to identitySecureScore.
     * @param float|null $value Value to set for the maxScore property.
    */
    public function setMaxScore(?float $value): void {
        $this->getBackingStore()->set('maxScore', $value);
    }

    /**
     * Sets the postponeUntilDateTime property value. The future date and time when the status of a postponed recommendation will be active again.
     * @param DateTime|null $value Value to set for the postponeUntilDateTime property.
    */
    public function setPostponeUntilDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('postponeUntilDateTime', $value);
    }

    /**
     * Sets the priority property value. The priority property
     * @param RecommendationPriority|null $value Value to set for the priority property.
    */
    public function setPriority(?RecommendationPriority $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the recommendationType property value. Friendly shortname to identify the recommendation. The possible values are: adfsAppsMigration, enableDesktopSSO, enablePHS, enableProvisioning, switchFromPerUserMFA, tenantMFA, thirdPartyApps, turnOffPerUserMFA, useAuthenticatorApp, useMyApps, staleApps, staleAppCreds, applicationCredentialExpiry, servicePrincipalKeyExpiry, adminMFAV2, blockLegacyAuthentication, integratedApps, mfaRegistrationV2, pwagePolicyNew, passwordHashSync, oneAdmin, roleOverlap, selfServicePasswordReset, signinRiskPolicy, userRiskPolicy, verifyAppPublisher, privateLinkForAAD, appRoleAssignmentsGroups, appRoleAssignmentsUsers, managedIdentity, overprivilegedApps, unknownFutureValue, longLivedCredentials, aadConnectDeprecated, adalToMsalMigration, ownerlessApps, inactiveGuests, aadGraphDeprecationApplication, aadGraphDeprecationServicePrincipal, mfaServerDeprecation. Use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: longLivedCredentials , aadConnectDeprecated , adalToMsalMigration , ownerlessApps , inactiveGuests , aadGraphDeprecationApplication , aadGraphDeprecationServicePrincipal , mfaServerDeprecation.
     * @param RecommendationType|null $value Value to set for the recommendationType property.
    */
    public function setRecommendationType(?RecommendationType $value): void {
        $this->getBackingStore()->set('recommendationType', $value);
    }

    /**
     * Sets the releaseType property value. The current release type of the recommendation. The possible values are: preview, generallyAvailable, unknownFutureValue.
     * @param string|null $value Value to set for the releaseType property.
    */
    public function setReleaseType(?string $value): void {
        $this->getBackingStore()->set('releaseType', $value);
    }

    /**
     * Sets the remediationImpact property value. Description of the impact on users of the remediation. Only applies to recommendations with category set to identitySecureScore.
     * @param string|null $value Value to set for the remediationImpact property.
    */
    public function setRemediationImpact(?string $value): void {
        $this->getBackingStore()->set('remediationImpact', $value);
    }

    /**
     * Sets the requiredLicenses property value. The required licenses to view the recommendation. The possible values are: notApplicable, microsoftEntraIdFree, microsoftEntraIdP1, microsoftEntraIdP2, microsoftEntraIdGovernance, microsoftEntraWorkloadId, unknownFutureValue.
     * @param RequiredLicenses|null $value Value to set for the requiredLicenses property.
    */
    public function setRequiredLicenses(?RequiredLicenses $value): void {
        $this->getBackingStore()->set('requiredLicenses', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param RecommendationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?RecommendationStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
