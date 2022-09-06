<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Beta\Generated\Models\IdentityGovernance\LifecycleWorkflowsContainer;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IdentityGovernance implements AdditionalDataHolder, Parsable 
{
    /**
     * @var AccessReviewSet|null $accessReviews The accessReviews property
    */
    private ?AccessReviewSet $accessReviews = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AppConsentApprovalRoute|null $appConsent The appConsent property
    */
    private ?AppConsentApprovalRoute $appConsent = null;
    
    /**
     * @var EntitlementManagement|null $entitlementManagement The entitlementManagement property
    */
    private ?EntitlementManagement $entitlementManagement = null;
    
    /**
     * @var LifecycleWorkflowsContainer|null $lifecycleWorkflows The lifecycleWorkflows property
    */
    private ?LifecycleWorkflowsContainer $lifecycleWorkflows = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var TermsOfUseContainer|null $termsOfUse The termsOfUse property
    */
    private ?TermsOfUseContainer $termsOfUse = null;
    
    /**
     * Instantiates a new IdentityGovernance and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.identityGovernance');
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
        return $this->accessReviews;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appConsent property value. The appConsent property
     * @return AppConsentApprovalRoute|null
    */
    public function getAppConsent(): ?AppConsentApprovalRoute {
        return $this->appConsent;
    }

    /**
     * Gets the entitlementManagement property value. The entitlementManagement property
     * @return EntitlementManagement|null
    */
    public function getEntitlementManagement(): ?EntitlementManagement {
        return $this->entitlementManagement;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessReviews' => function (ParseNode $n) use ($o) { $o->setAccessReviews($n->getObjectValue(array(AccessReviewSet::class, 'createFromDiscriminatorValue'))); },
            'appConsent' => function (ParseNode $n) use ($o) { $o->setAppConsent($n->getObjectValue(array(AppConsentApprovalRoute::class, 'createFromDiscriminatorValue'))); },
            'entitlementManagement' => function (ParseNode $n) use ($o) { $o->setEntitlementManagement($n->getObjectValue(array(EntitlementManagement::class, 'createFromDiscriminatorValue'))); },
            'lifecycleWorkflows' => function (ParseNode $n) use ($o) { $o->setLifecycleWorkflows($n->getObjectValue(array(LifecycleWorkflowsContainer::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'termsOfUse' => function (ParseNode $n) use ($o) { $o->setTermsOfUse($n->getObjectValue(array(TermsOfUseContainer::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the lifecycleWorkflows property value. The lifecycleWorkflows property
     * @return LifecycleWorkflowsContainer|null
    */
    public function getLifecycleWorkflows(): ?LifecycleWorkflowsContainer {
        return $this->lifecycleWorkflows;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the termsOfUse property value. The termsOfUse property
     * @return TermsOfUseContainer|null
    */
    public function getTermsOfUse(): ?TermsOfUseContainer {
        return $this->termsOfUse;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('accessReviews', $this->accessReviews);
        $writer->writeObjectValue('appConsent', $this->appConsent);
        $writer->writeObjectValue('entitlementManagement', $this->entitlementManagement);
        $writer->writeObjectValue('lifecycleWorkflows', $this->lifecycleWorkflows);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('termsOfUse', $this->termsOfUse);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accessReviews property value. The accessReviews property
     *  @param AccessReviewSet|null $value Value to set for the accessReviews property.
    */
    public function setAccessReviews(?AccessReviewSet $value ): void {
        $this->accessReviews = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the appConsent property value. The appConsent property
     *  @param AppConsentApprovalRoute|null $value Value to set for the appConsent property.
    */
    public function setAppConsent(?AppConsentApprovalRoute $value ): void {
        $this->appConsent = $value;
    }

    /**
     * Sets the entitlementManagement property value. The entitlementManagement property
     *  @param EntitlementManagement|null $value Value to set for the entitlementManagement property.
    */
    public function setEntitlementManagement(?EntitlementManagement $value ): void {
        $this->entitlementManagement = $value;
    }

    /**
     * Sets the lifecycleWorkflows property value. The lifecycleWorkflows property
     *  @param LifecycleWorkflowsContainer|null $value Value to set for the lifecycleWorkflows property.
    */
    public function setLifecycleWorkflows(?LifecycleWorkflowsContainer $value ): void {
        $this->lifecycleWorkflows = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the termsOfUse property value. The termsOfUse property
     *  @param TermsOfUseContainer|null $value Value to set for the termsOfUse property.
    */
    public function setTermsOfUse(?TermsOfUseContainer $value ): void {
        $this->termsOfUse = $value;
    }

}
