<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RelyingPartyDetailedSummary extends Entity implements Parsable 
{
    /**
     * @var int|null $failedSignInCount Number of failed sign in on Active Directory Federation Service in the period specified.
    */
    private ?int $failedSignInCount = null;
    
    /**
     * @var MigrationStatus|null $migrationStatus Indication of whether the application can be moved to Azure AD or require more investigation. Possible values are: ready, needsReview, additionalStepsRequired, unknownFutureValue.
    */
    private ?MigrationStatus $migrationStatus = null;
    
    /**
     * @var array<KeyValuePair>|null $migrationValidationDetails Specifies all the validations check done on applications configuration details to evaluate if the application is ready to be moved to Azure AD.
    */
    private ?array $migrationValidationDetails = null;
    
    /**
     * @var string|null $relyingPartyId This identifier is used to identify the relying party to this Federation Service. It is used when issuing claims to the relying party.
    */
    private ?string $relyingPartyId = null;
    
    /**
     * @var string|null $relyingPartyName Name of application or other entity on the internet that uses an identity provider to authenticate a user who wants to log in.
    */
    private ?string $relyingPartyName = null;
    
    /**
     * @var array<string>|null $replyUrls Specifies where the relying party expects to receive the token.
    */
    private ?array $replyUrls = null;
    
    /**
     * @var string|null $serviceId Uniquely identifies the Active Directory forest.
    */
    private ?string $serviceId = null;
    
    /**
     * @var float|null $signInSuccessRate Number of successful / (number of successful + number of failed sign ins) on Active Directory Federation Service in the period specified.
    */
    private ?float $signInSuccessRate = null;
    
    /**
     * @var int|null $successfulSignInCount Number of successful sign ins on Active Directory Federation Service.
    */
    private ?int $successfulSignInCount = null;
    
    /**
     * @var int|null $totalSignInCount Number of successful + failed sign ins failed sign ins on Active Directory Federation Service in the period specified.
    */
    private ?int $totalSignInCount = null;
    
    /**
     * @var int|null $uniqueUserCount Number of unique users that have signed into the application.
    */
    private ?int $uniqueUserCount = null;
    
    /**
     * Instantiates a new relyingPartyDetailedSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RelyingPartyDetailedSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RelyingPartyDetailedSummary {
        return new RelyingPartyDetailedSummary();
    }

    /**
     * Gets the failedSignInCount property value. Number of failed sign in on Active Directory Federation Service in the period specified.
     * @return int|null
    */
    public function getFailedSignInCount(): ?int {
        return $this->failedSignInCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'failedSignInCount' => function (ParseNode $n) use ($o) { $o->setFailedSignInCount($n->getIntegerValue()); },
            'migrationStatus' => function (ParseNode $n) use ($o) { $o->setMigrationStatus($n->getEnumValue(MigrationStatus::class)); },
            'migrationValidationDetails' => function (ParseNode $n) use ($o) { $o->setMigrationValidationDetails($n->getCollectionOfObjectValues(array(KeyValuePair::class, 'createFromDiscriminatorValue'))); },
            'relyingPartyId' => function (ParseNode $n) use ($o) { $o->setRelyingPartyId($n->getStringValue()); },
            'relyingPartyName' => function (ParseNode $n) use ($o) { $o->setRelyingPartyName($n->getStringValue()); },
            'replyUrls' => function (ParseNode $n) use ($o) { $o->setReplyUrls($n->getCollectionOfPrimitiveValues()); },
            'serviceId' => function (ParseNode $n) use ($o) { $o->setServiceId($n->getStringValue()); },
            'signInSuccessRate' => function (ParseNode $n) use ($o) { $o->setSignInSuccessRate($n->getFloatValue()); },
            'successfulSignInCount' => function (ParseNode $n) use ($o) { $o->setSuccessfulSignInCount($n->getIntegerValue()); },
            'totalSignInCount' => function (ParseNode $n) use ($o) { $o->setTotalSignInCount($n->getIntegerValue()); },
            'uniqueUserCount' => function (ParseNode $n) use ($o) { $o->setUniqueUserCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the migrationStatus property value. Indication of whether the application can be moved to Azure AD or require more investigation. Possible values are: ready, needsReview, additionalStepsRequired, unknownFutureValue.
     * @return MigrationStatus|null
    */
    public function getMigrationStatus(): ?MigrationStatus {
        return $this->migrationStatus;
    }

    /**
     * Gets the migrationValidationDetails property value. Specifies all the validations check done on applications configuration details to evaluate if the application is ready to be moved to Azure AD.
     * @return array<KeyValuePair>|null
    */
    public function getMigrationValidationDetails(): ?array {
        return $this->migrationValidationDetails;
    }

    /**
     * Gets the relyingPartyId property value. This identifier is used to identify the relying party to this Federation Service. It is used when issuing claims to the relying party.
     * @return string|null
    */
    public function getRelyingPartyId(): ?string {
        return $this->relyingPartyId;
    }

    /**
     * Gets the relyingPartyName property value. Name of application or other entity on the internet that uses an identity provider to authenticate a user who wants to log in.
     * @return string|null
    */
    public function getRelyingPartyName(): ?string {
        return $this->relyingPartyName;
    }

    /**
     * Gets the replyUrls property value. Specifies where the relying party expects to receive the token.
     * @return array<string>|null
    */
    public function getReplyUrls(): ?array {
        return $this->replyUrls;
    }

    /**
     * Gets the serviceId property value. Uniquely identifies the Active Directory forest.
     * @return string|null
    */
    public function getServiceId(): ?string {
        return $this->serviceId;
    }

    /**
     * Gets the signInSuccessRate property value. Number of successful / (number of successful + number of failed sign ins) on Active Directory Federation Service in the period specified.
     * @return float|null
    */
    public function getSignInSuccessRate(): ?float {
        return $this->signInSuccessRate;
    }

    /**
     * Gets the successfulSignInCount property value. Number of successful sign ins on Active Directory Federation Service.
     * @return int|null
    */
    public function getSuccessfulSignInCount(): ?int {
        return $this->successfulSignInCount;
    }

    /**
     * Gets the totalSignInCount property value. Number of successful + failed sign ins failed sign ins on Active Directory Federation Service in the period specified.
     * @return int|null
    */
    public function getTotalSignInCount(): ?int {
        return $this->totalSignInCount;
    }

    /**
     * Gets the uniqueUserCount property value. Number of unique users that have signed into the application.
     * @return int|null
    */
    public function getUniqueUserCount(): ?int {
        return $this->uniqueUserCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('failedSignInCount', $this->failedSignInCount);
        $writer->writeEnumValue('migrationStatus', $this->migrationStatus);
        $writer->writeCollectionOfObjectValues('migrationValidationDetails', $this->migrationValidationDetails);
        $writer->writeStringValue('relyingPartyId', $this->relyingPartyId);
        $writer->writeStringValue('relyingPartyName', $this->relyingPartyName);
        $writer->writeCollectionOfPrimitiveValues('replyUrls', $this->replyUrls);
        $writer->writeStringValue('serviceId', $this->serviceId);
        $writer->writeFloatValue('signInSuccessRate', $this->signInSuccessRate);
        $writer->writeIntegerValue('successfulSignInCount', $this->successfulSignInCount);
        $writer->writeIntegerValue('totalSignInCount', $this->totalSignInCount);
        $writer->writeIntegerValue('uniqueUserCount', $this->uniqueUserCount);
    }

    /**
     * Sets the failedSignInCount property value. Number of failed sign in on Active Directory Federation Service in the period specified.
     *  @param int|null $value Value to set for the failedSignInCount property.
    */
    public function setFailedSignInCount(?int $value ): void {
        $this->failedSignInCount = $value;
    }

    /**
     * Sets the migrationStatus property value. Indication of whether the application can be moved to Azure AD or require more investigation. Possible values are: ready, needsReview, additionalStepsRequired, unknownFutureValue.
     *  @param MigrationStatus|null $value Value to set for the migrationStatus property.
    */
    public function setMigrationStatus(?MigrationStatus $value ): void {
        $this->migrationStatus = $value;
    }

    /**
     * Sets the migrationValidationDetails property value. Specifies all the validations check done on applications configuration details to evaluate if the application is ready to be moved to Azure AD.
     *  @param array<KeyValuePair>|null $value Value to set for the migrationValidationDetails property.
    */
    public function setMigrationValidationDetails(?array $value ): void {
        $this->migrationValidationDetails = $value;
    }

    /**
     * Sets the relyingPartyId property value. This identifier is used to identify the relying party to this Federation Service. It is used when issuing claims to the relying party.
     *  @param string|null $value Value to set for the relyingPartyId property.
    */
    public function setRelyingPartyId(?string $value ): void {
        $this->relyingPartyId = $value;
    }

    /**
     * Sets the relyingPartyName property value. Name of application or other entity on the internet that uses an identity provider to authenticate a user who wants to log in.
     *  @param string|null $value Value to set for the relyingPartyName property.
    */
    public function setRelyingPartyName(?string $value ): void {
        $this->relyingPartyName = $value;
    }

    /**
     * Sets the replyUrls property value. Specifies where the relying party expects to receive the token.
     *  @param array<string>|null $value Value to set for the replyUrls property.
    */
    public function setReplyUrls(?array $value ): void {
        $this->replyUrls = $value;
    }

    /**
     * Sets the serviceId property value. Uniquely identifies the Active Directory forest.
     *  @param string|null $value Value to set for the serviceId property.
    */
    public function setServiceId(?string $value ): void {
        $this->serviceId = $value;
    }

    /**
     * Sets the signInSuccessRate property value. Number of successful / (number of successful + number of failed sign ins) on Active Directory Federation Service in the period specified.
     *  @param float|null $value Value to set for the signInSuccessRate property.
    */
    public function setSignInSuccessRate(?float $value ): void {
        $this->signInSuccessRate = $value;
    }

    /**
     * Sets the successfulSignInCount property value. Number of successful sign ins on Active Directory Federation Service.
     *  @param int|null $value Value to set for the successfulSignInCount property.
    */
    public function setSuccessfulSignInCount(?int $value ): void {
        $this->successfulSignInCount = $value;
    }

    /**
     * Sets the totalSignInCount property value. Number of successful + failed sign ins failed sign ins on Active Directory Federation Service in the period specified.
     *  @param int|null $value Value to set for the totalSignInCount property.
    */
    public function setTotalSignInCount(?int $value ): void {
        $this->totalSignInCount = $value;
    }

    /**
     * Sets the uniqueUserCount property value. Number of unique users that have signed into the application.
     *  @param int|null $value Value to set for the uniqueUserCount property.
    */
    public function setUniqueUserCount(?int $value ): void {
        $this->uniqueUserCount = $value;
    }

}
