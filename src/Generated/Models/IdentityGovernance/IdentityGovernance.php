<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Beta\Generated\Models\AccessReviewSet;
use Microsoft\Graph\Beta\Generated\Models\AppConsentApprovalRoute;
use Microsoft\Graph\Beta\Generated\Models\EntitlementManagement;
use Microsoft\Graph\Beta\Generated\Models\PermissionsAnalyticsAggregation;
use Microsoft\Graph\Beta\Generated\Models\PermissionsManagement;
use Microsoft\Graph\Beta\Generated\Models\PrivilegedAccessRoot;
use Microsoft\Graph\Beta\Generated\Models\RoleManagementAlert;
use Microsoft\Graph\Beta\Generated\Models\TermsOfUseContainer;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class IdentityGovernance implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new IdentityGovernance and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityGovernance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentityGovernance {
        return new IdentityGovernance();
    }

    /**
     * Gets the accessReviews property value. The accessReviews property
     * @return AccessReviewSet|null
    */
    public function getAccessReviews(): ?AccessReviewSet {
        $val = $this->getBackingStore()->get('accessReviews');
        if (is_null($val) || $val instanceof AccessReviewSet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessReviews'");
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the appConsent property value. The appConsent property
     * @return AppConsentApprovalRoute|null
    */
    public function getAppConsent(): ?AppConsentApprovalRoute {
        $val = $this->getBackingStore()->get('appConsent');
        if (is_null($val) || $val instanceof AppConsentApprovalRoute) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appConsent'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the entitlementManagement property value. The entitlementManagement property
     * @return EntitlementManagement|null
    */
    public function getEntitlementManagement(): ?EntitlementManagement {
        $val = $this->getBackingStore()->get('entitlementManagement');
        if (is_null($val) || $val instanceof EntitlementManagement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'entitlementManagement'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessReviews' => fn(ParseNode $n) => $o->setAccessReviews($n->getObjectValue([AccessReviewSet::class, 'createFromDiscriminatorValue'])),
            'appConsent' => fn(ParseNode $n) => $o->setAppConsent($n->getObjectValue([AppConsentApprovalRoute::class, 'createFromDiscriminatorValue'])),
            'entitlementManagement' => fn(ParseNode $n) => $o->setEntitlementManagement($n->getObjectValue([EntitlementManagement::class, 'createFromDiscriminatorValue'])),
            'lifecycleWorkflows' => fn(ParseNode $n) => $o->setLifecycleWorkflows($n->getObjectValue([LifecycleWorkflowsContainer::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'permissionsAnalytics' => fn(ParseNode $n) => $o->setPermissionsAnalytics($n->getObjectValue([PermissionsAnalyticsAggregation::class, 'createFromDiscriminatorValue'])),
            'permissionsManagement' => fn(ParseNode $n) => $o->setPermissionsManagement($n->getObjectValue([PermissionsManagement::class, 'createFromDiscriminatorValue'])),
            'privilegedAccess' => fn(ParseNode $n) => $o->setPrivilegedAccess($n->getObjectValue([PrivilegedAccessRoot::class, 'createFromDiscriminatorValue'])),
            'roleManagementAlerts' => fn(ParseNode $n) => $o->setRoleManagementAlerts($n->getObjectValue([RoleManagementAlert::class, 'createFromDiscriminatorValue'])),
            'termsOfUse' => fn(ParseNode $n) => $o->setTermsOfUse($n->getObjectValue([TermsOfUseContainer::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the lifecycleWorkflows property value. The lifecycleWorkflows property
     * @return LifecycleWorkflowsContainer|null
    */
    public function getLifecycleWorkflows(): ?LifecycleWorkflowsContainer {
        $val = $this->getBackingStore()->get('lifecycleWorkflows');
        if (is_null($val) || $val instanceof LifecycleWorkflowsContainer) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lifecycleWorkflows'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the permissionsAnalytics property value. The permissionsAnalytics property
     * @return PermissionsAnalyticsAggregation|null
    */
    public function getPermissionsAnalytics(): ?PermissionsAnalyticsAggregation {
        $val = $this->getBackingStore()->get('permissionsAnalytics');
        if (is_null($val) || $val instanceof PermissionsAnalyticsAggregation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionsAnalytics'");
    }

    /**
     * Gets the permissionsManagement property value. The permissionsManagement property
     * @return PermissionsManagement|null
    */
    public function getPermissionsManagement(): ?PermissionsManagement {
        $val = $this->getBackingStore()->get('permissionsManagement');
        if (is_null($val) || $val instanceof PermissionsManagement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionsManagement'");
    }

    /**
     * Gets the privilegedAccess property value. The privilegedAccess property
     * @return PrivilegedAccessRoot|null
    */
    public function getPrivilegedAccess(): ?PrivilegedAccessRoot {
        $val = $this->getBackingStore()->get('privilegedAccess');
        if (is_null($val) || $val instanceof PrivilegedAccessRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'privilegedAccess'");
    }

    /**
     * Gets the roleManagementAlerts property value. The roleManagementAlerts property
     * @return RoleManagementAlert|null
    */
    public function getRoleManagementAlerts(): ?RoleManagementAlert {
        $val = $this->getBackingStore()->get('roleManagementAlerts');
        if (is_null($val) || $val instanceof RoleManagementAlert) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleManagementAlerts'");
    }

    /**
     * Gets the termsOfUse property value. The termsOfUse property
     * @return TermsOfUseContainer|null
    */
    public function getTermsOfUse(): ?TermsOfUseContainer {
        $val = $this->getBackingStore()->get('termsOfUse');
        if (is_null($val) || $val instanceof TermsOfUseContainer) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'termsOfUse'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('accessReviews', $this->getAccessReviews());
        $writer->writeObjectValue('appConsent', $this->getAppConsent());
        $writer->writeObjectValue('entitlementManagement', $this->getEntitlementManagement());
        $writer->writeObjectValue('lifecycleWorkflows', $this->getLifecycleWorkflows());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('permissionsAnalytics', $this->getPermissionsAnalytics());
        $writer->writeObjectValue('permissionsManagement', $this->getPermissionsManagement());
        $writer->writeObjectValue('privilegedAccess', $this->getPrivilegedAccess());
        $writer->writeObjectValue('roleManagementAlerts', $this->getRoleManagementAlerts());
        $writer->writeObjectValue('termsOfUse', $this->getTermsOfUse());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accessReviews property value. The accessReviews property
     * @param AccessReviewSet|null $value Value to set for the accessReviews property.
    */
    public function setAccessReviews(?AccessReviewSet $value): void {
        $this->getBackingStore()->set('accessReviews', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the appConsent property value. The appConsent property
     * @param AppConsentApprovalRoute|null $value Value to set for the appConsent property.
    */
    public function setAppConsent(?AppConsentApprovalRoute $value): void {
        $this->getBackingStore()->set('appConsent', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the entitlementManagement property value. The entitlementManagement property
     * @param EntitlementManagement|null $value Value to set for the entitlementManagement property.
    */
    public function setEntitlementManagement(?EntitlementManagement $value): void {
        $this->getBackingStore()->set('entitlementManagement', $value);
    }

    /**
     * Sets the lifecycleWorkflows property value. The lifecycleWorkflows property
     * @param LifecycleWorkflowsContainer|null $value Value to set for the lifecycleWorkflows property.
    */
    public function setLifecycleWorkflows(?LifecycleWorkflowsContainer $value): void {
        $this->getBackingStore()->set('lifecycleWorkflows', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the permissionsAnalytics property value. The permissionsAnalytics property
     * @param PermissionsAnalyticsAggregation|null $value Value to set for the permissionsAnalytics property.
    */
    public function setPermissionsAnalytics(?PermissionsAnalyticsAggregation $value): void {
        $this->getBackingStore()->set('permissionsAnalytics', $value);
    }

    /**
     * Sets the permissionsManagement property value. The permissionsManagement property
     * @param PermissionsManagement|null $value Value to set for the permissionsManagement property.
    */
    public function setPermissionsManagement(?PermissionsManagement $value): void {
        $this->getBackingStore()->set('permissionsManagement', $value);
    }

    /**
     * Sets the privilegedAccess property value. The privilegedAccess property
     * @param PrivilegedAccessRoot|null $value Value to set for the privilegedAccess property.
    */
    public function setPrivilegedAccess(?PrivilegedAccessRoot $value): void {
        $this->getBackingStore()->set('privilegedAccess', $value);
    }

    /**
     * Sets the roleManagementAlerts property value. The roleManagementAlerts property
     * @param RoleManagementAlert|null $value Value to set for the roleManagementAlerts property.
    */
    public function setRoleManagementAlerts(?RoleManagementAlert $value): void {
        $this->getBackingStore()->set('roleManagementAlerts', $value);
    }

    /**
     * Sets the termsOfUse property value. The termsOfUse property
     * @param TermsOfUseContainer|null $value Value to set for the termsOfUse property.
    */
    public function setTermsOfUse(?TermsOfUseContainer $value): void {
        $this->getBackingStore()->set('termsOfUse', $value);
    }

}
