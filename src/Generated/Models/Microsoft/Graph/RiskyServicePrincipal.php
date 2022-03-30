<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RiskyServicePrincipal extends Entity 
{
    /** @var bool|null $accountEnabled true if the service principal account is enabled; otherwise, false. */
    private ?bool $accountEnabled = null;
    
    /** @var string|null $appId The globally unique identifier for the associated application (its appId property), if any. */
    private ?string $appId = null;
    
    /** @var string|null $displayName The display name for the service principal. */
    private ?string $displayName = null;
    
    /** @var array<RiskyServicePrincipalHistoryItem>|null $history Represents the risk history of Azure AD service principals. */
    private ?array $history = null;
    
    /** @var bool|null $isProcessing Indicates whether Azure AD is currently processing the service principal's risky state. */
    private ?bool $isProcessing = null;
    
    /** @var RiskDetail|null $riskDetail Details of the detected risk. Note: Details for this property are only available for Azure AD Premium P2 customers. P1 customers will be returned hidden. The possible values are: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden,  adminConfirmedUserCompromised, unknownFutureValue, adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: adminConfirmedServicePrincipalCompromised , adminDismissedAllRiskForServicePrincipal. */
    private ?RiskDetail $riskDetail = null;
    
    /** @var DateTime|null $riskLastUpdatedDateTime The date and time that the risk state was last updated. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2021 is 2021-01-01T00:00:00Z. Supports $filter (eq). */
    private ?DateTime $riskLastUpdatedDateTime = null;
    
    /** @var RiskLevel|null $riskLevel Level of the detected risky workload identity. The possible values are: low, medium, high, hidden, none, unknownFutureValue. Supports $filter (eq). */
    private ?RiskLevel $riskLevel = null;
    
    /** @var RiskState|null $riskState State of the service principal's risk. The possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue. */
    private ?RiskState $riskState = null;
    
    /** @var string|null $servicePrincipalType Identifies whether the service principal represents an Application, a ManagedIdentity, or a legacy application (socialIdp). This is set by Azure AD internally and is inherited from servicePrincipal. */
    private ?string $servicePrincipalType = null;
    
    /**
     * Instantiates a new riskyServicePrincipal and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RiskyServicePrincipal
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): RiskyServicePrincipal {
        return new RiskyServicePrincipal();
    }

    /**
     * Gets the accountEnabled property value. true if the service principal account is enabled; otherwise, false.
     * @return bool|null
    */
    public function getAccountEnabled(): ?bool {
        return $this->accountEnabled;
    }

    /**
     * Gets the appId property value. The globally unique identifier for the associated application (its appId property), if any.
     * @return string|null
    */
    public function getAppId(): ?string {
        return $this->appId;
    }

    /**
     * Gets the displayName property value. The display name for the service principal.
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
        return array_merge(parent::getFieldDeserializers(), [
            'accountEnabled' => function (self $o, ParseNode $n) { $o->setAccountEnabled($n->getBooleanValue()); },
            'appId' => function (self $o, ParseNode $n) { $o->setAppId($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'history' => function (self $o, ParseNode $n) { $o->setHistory($n->getCollectionOfObjectValues(RiskyServicePrincipalHistoryItem::class)); },
            'isProcessing' => function (self $o, ParseNode $n) { $o->setIsProcessing($n->getBooleanValue()); },
            'riskDetail' => function (self $o, ParseNode $n) { $o->setRiskDetail($n->getEnumValue(RiskDetail::class)); },
            'riskLastUpdatedDateTime' => function (self $o, ParseNode $n) { $o->setRiskLastUpdatedDateTime($n->getDateTimeValue()); },
            'riskLevel' => function (self $o, ParseNode $n) { $o->setRiskLevel($n->getEnumValue(RiskLevel::class)); },
            'riskState' => function (self $o, ParseNode $n) { $o->setRiskState($n->getEnumValue(RiskState::class)); },
            'servicePrincipalType' => function (self $o, ParseNode $n) { $o->setServicePrincipalType($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the history property value. Represents the risk history of Azure AD service principals.
     * @return array<RiskyServicePrincipalHistoryItem>|null
    */
    public function getHistory(): ?array {
        return $this->history;
    }

    /**
     * Gets the isProcessing property value. Indicates whether Azure AD is currently processing the service principal's risky state.
     * @return bool|null
    */
    public function getIsProcessing(): ?bool {
        return $this->isProcessing;
    }

    /**
     * Gets the riskDetail property value. Details of the detected risk. Note: Details for this property are only available for Azure AD Premium P2 customers. P1 customers will be returned hidden. The possible values are: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden,  adminConfirmedUserCompromised, unknownFutureValue, adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: adminConfirmedServicePrincipalCompromised , adminDismissedAllRiskForServicePrincipal.
     * @return RiskDetail|null
    */
    public function getRiskDetail(): ?RiskDetail {
        return $this->riskDetail;
    }

    /**
     * Gets the riskLastUpdatedDateTime property value. The date and time that the risk state was last updated. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2021 is 2021-01-01T00:00:00Z. Supports $filter (eq).
     * @return DateTime|null
    */
    public function getRiskLastUpdatedDateTime(): ?DateTime {
        return $this->riskLastUpdatedDateTime;
    }

    /**
     * Gets the riskLevel property value. Level of the detected risky workload identity. The possible values are: low, medium, high, hidden, none, unknownFutureValue. Supports $filter (eq).
     * @return RiskLevel|null
    */
    public function getRiskLevel(): ?RiskLevel {
        return $this->riskLevel;
    }

    /**
     * Gets the riskState property value. State of the service principal's risk. The possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue.
     * @return RiskState|null
    */
    public function getRiskState(): ?RiskState {
        return $this->riskState;
    }

    /**
     * Gets the servicePrincipalType property value. Identifies whether the service principal represents an Application, a ManagedIdentity, or a legacy application (socialIdp). This is set by Azure AD internally and is inherited from servicePrincipal.
     * @return string|null
    */
    public function getServicePrincipalType(): ?string {
        return $this->servicePrincipalType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('accountEnabled', $this->accountEnabled);
        $writer->writeStringValue('appId', $this->appId);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('history', $this->history);
        $writer->writeBooleanValue('isProcessing', $this->isProcessing);
        $writer->writeEnumValue('riskDetail', $this->riskDetail);
        $writer->writeDateTimeValue('riskLastUpdatedDateTime', $this->riskLastUpdatedDateTime);
        $writer->writeEnumValue('riskLevel', $this->riskLevel);
        $writer->writeEnumValue('riskState', $this->riskState);
        $writer->writeStringValue('servicePrincipalType', $this->servicePrincipalType);
    }

    /**
     * Sets the accountEnabled property value. true if the service principal account is enabled; otherwise, false.
     *  @param bool|null $value Value to set for the accountEnabled property.
    */
    public function setAccountEnabled(?bool $value ): void {
        $this->accountEnabled = $value;
    }

    /**
     * Sets the appId property value. The globally unique identifier for the associated application (its appId property), if any.
     *  @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value ): void {
        $this->appId = $value;
    }

    /**
     * Sets the displayName property value. The display name for the service principal.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the history property value. Represents the risk history of Azure AD service principals.
     *  @param array<RiskyServicePrincipalHistoryItem>|null $value Value to set for the history property.
    */
    public function setHistory(?array $value ): void {
        $this->history = $value;
    }

    /**
     * Sets the isProcessing property value. Indicates whether Azure AD is currently processing the service principal's risky state.
     *  @param bool|null $value Value to set for the isProcessing property.
    */
    public function setIsProcessing(?bool $value ): void {
        $this->isProcessing = $value;
    }

    /**
     * Sets the riskDetail property value. Details of the detected risk. Note: Details for this property are only available for Azure AD Premium P2 customers. P1 customers will be returned hidden. The possible values are: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden,  adminConfirmedUserCompromised, unknownFutureValue, adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: adminConfirmedServicePrincipalCompromised , adminDismissedAllRiskForServicePrincipal.
     *  @param RiskDetail|null $value Value to set for the riskDetail property.
    */
    public function setRiskDetail(?RiskDetail $value ): void {
        $this->riskDetail = $value;
    }

    /**
     * Sets the riskLastUpdatedDateTime property value. The date and time that the risk state was last updated. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2021 is 2021-01-01T00:00:00Z. Supports $filter (eq).
     *  @param DateTime|null $value Value to set for the riskLastUpdatedDateTime property.
    */
    public function setRiskLastUpdatedDateTime(?DateTime $value ): void {
        $this->riskLastUpdatedDateTime = $value;
    }

    /**
     * Sets the riskLevel property value. Level of the detected risky workload identity. The possible values are: low, medium, high, hidden, none, unknownFutureValue. Supports $filter (eq).
     *  @param RiskLevel|null $value Value to set for the riskLevel property.
    */
    public function setRiskLevel(?RiskLevel $value ): void {
        $this->riskLevel = $value;
    }

    /**
     * Sets the riskState property value. State of the service principal's risk. The possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue.
     *  @param RiskState|null $value Value to set for the riskState property.
    */
    public function setRiskState(?RiskState $value ): void {
        $this->riskState = $value;
    }

    /**
     * Sets the servicePrincipalType property value. Identifies whether the service principal represents an Application, a ManagedIdentity, or a legacy application (socialIdp). This is set by Azure AD internally and is inherited from servicePrincipal.
     *  @param string|null $value Value to set for the servicePrincipalType property.
    */
    public function setServicePrincipalType(?string $value ): void {
        $this->servicePrincipalType = $value;
    }

}
