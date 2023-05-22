<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RelyingPartyDetailedSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new RelyingPartyDetailedSummary and sets the default values.
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
        return $this->getBackingStore()->get('failedSignInCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'failedSignInCount' => fn(ParseNode $n) => $o->setFailedSignInCount($n->getIntegerValue()),
            'migrationStatus' => fn(ParseNode $n) => $o->setMigrationStatus($n->getEnumValue(MigrationStatus::class)),
            'migrationValidationDetails' => fn(ParseNode $n) => $o->setMigrationValidationDetails($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'relyingPartyId' => fn(ParseNode $n) => $o->setRelyingPartyId($n->getStringValue()),
            'relyingPartyName' => fn(ParseNode $n) => $o->setRelyingPartyName($n->getStringValue()),
            'replyUrls' => fn(ParseNode $n) => $o->setReplyUrls($n->getCollectionOfPrimitiveValues()),
            'serviceId' => fn(ParseNode $n) => $o->setServiceId($n->getStringValue()),
            'signInSuccessRate' => fn(ParseNode $n) => $o->setSignInSuccessRate($n->getFloatValue()),
            'successfulSignInCount' => fn(ParseNode $n) => $o->setSuccessfulSignInCount($n->getIntegerValue()),
            'totalSignInCount' => fn(ParseNode $n) => $o->setTotalSignInCount($n->getIntegerValue()),
            'uniqueUserCount' => fn(ParseNode $n) => $o->setUniqueUserCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the migrationStatus property value. The migrationStatus property
     * @return MigrationStatus|null
    */
    public function getMigrationStatus(): ?MigrationStatus {
        return $this->getBackingStore()->get('migrationStatus');
    }

    /**
     * Gets the migrationValidationDetails property value. Specifies all the validations check done on applications configuration details to evaluate if the application is ready to be moved to Azure AD.
     * @return array<KeyValuePair>|null
    */
    public function getMigrationValidationDetails(): ?array {
        return $this->getBackingStore()->get('migrationValidationDetails');
    }

    /**
     * Gets the relyingPartyId property value. This identifier is used to identify the relying party to this Federation Service. It is used when issuing claims to the relying party.
     * @return string|null
    */
    public function getRelyingPartyId(): ?string {
        return $this->getBackingStore()->get('relyingPartyId');
    }

    /**
     * Gets the relyingPartyName property value. Name of application or other entity on the internet that uses an identity provider to authenticate a user who wants to log in.
     * @return string|null
    */
    public function getRelyingPartyName(): ?string {
        return $this->getBackingStore()->get('relyingPartyName');
    }

    /**
     * Gets the replyUrls property value. Specifies where the relying party expects to receive the token.
     * @return array<string>|null
    */
    public function getReplyUrls(): ?array {
        return $this->getBackingStore()->get('replyUrls');
    }

    /**
     * Gets the serviceId property value. Uniquely identifies the Active Directory forest.
     * @return string|null
    */
    public function getServiceId(): ?string {
        return $this->getBackingStore()->get('serviceId');
    }

    /**
     * Gets the signInSuccessRate property value. Number of successful / (number of successful + number of failed sign ins) on Active Directory Federation Service in the period specified.
     * @return float|null
    */
    public function getSignInSuccessRate(): ?float {
        return $this->getBackingStore()->get('signInSuccessRate');
    }

    /**
     * Gets the successfulSignInCount property value. Number of successful sign ins on Active Directory Federation Service.
     * @return int|null
    */
    public function getSuccessfulSignInCount(): ?int {
        return $this->getBackingStore()->get('successfulSignInCount');
    }

    /**
     * Gets the totalSignInCount property value. Number of successful + failed sign ins failed sign ins on Active Directory Federation Service in the period specified.
     * @return int|null
    */
    public function getTotalSignInCount(): ?int {
        return $this->getBackingStore()->get('totalSignInCount');
    }

    /**
     * Gets the uniqueUserCount property value. Number of unique users that have signed into the application.
     * @return int|null
    */
    public function getUniqueUserCount(): ?int {
        return $this->getBackingStore()->get('uniqueUserCount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('failedSignInCount', $this->getFailedSignInCount());
        $writer->writeEnumValue('migrationStatus', $this->getMigrationStatus());
        $writer->writeCollectionOfObjectValues('migrationValidationDetails', $this->getMigrationValidationDetails());
        $writer->writeStringValue('relyingPartyId', $this->getRelyingPartyId());
        $writer->writeStringValue('relyingPartyName', $this->getRelyingPartyName());
        $writer->writeCollectionOfPrimitiveValues('replyUrls', $this->getReplyUrls());
        $writer->writeStringValue('serviceId', $this->getServiceId());
        $writer->writeFloatValue('signInSuccessRate', $this->getSignInSuccessRate());
        $writer->writeIntegerValue('successfulSignInCount', $this->getSuccessfulSignInCount());
        $writer->writeIntegerValue('totalSignInCount', $this->getTotalSignInCount());
        $writer->writeIntegerValue('uniqueUserCount', $this->getUniqueUserCount());
    }

    /**
     * Sets the failedSignInCount property value. Number of failed sign in on Active Directory Federation Service in the period specified.
     * @param int|null $value Value to set for the failedSignInCount property.
    */
    public function setFailedSignInCount(?int $value): void {
        $this->getBackingStore()->set('failedSignInCount', $value);
    }

    /**
     * Sets the migrationStatus property value. The migrationStatus property
     * @param MigrationStatus|null $value Value to set for the migrationStatus property.
    */
    public function setMigrationStatus(?MigrationStatus $value): void {
        $this->getBackingStore()->set('migrationStatus', $value);
    }

    /**
     * Sets the migrationValidationDetails property value. Specifies all the validations check done on applications configuration details to evaluate if the application is ready to be moved to Azure AD.
     * @param array<KeyValuePair>|null $value Value to set for the migrationValidationDetails property.
    */
    public function setMigrationValidationDetails(?array $value): void {
        $this->getBackingStore()->set('migrationValidationDetails', $value);
    }

    /**
     * Sets the relyingPartyId property value. This identifier is used to identify the relying party to this Federation Service. It is used when issuing claims to the relying party.
     * @param string|null $value Value to set for the relyingPartyId property.
    */
    public function setRelyingPartyId(?string $value): void {
        $this->getBackingStore()->set('relyingPartyId', $value);
    }

    /**
     * Sets the relyingPartyName property value. Name of application or other entity on the internet that uses an identity provider to authenticate a user who wants to log in.
     * @param string|null $value Value to set for the relyingPartyName property.
    */
    public function setRelyingPartyName(?string $value): void {
        $this->getBackingStore()->set('relyingPartyName', $value);
    }

    /**
     * Sets the replyUrls property value. Specifies where the relying party expects to receive the token.
     * @param array<string>|null $value Value to set for the replyUrls property.
    */
    public function setReplyUrls(?array $value): void {
        $this->getBackingStore()->set('replyUrls', $value);
    }

    /**
     * Sets the serviceId property value. Uniquely identifies the Active Directory forest.
     * @param string|null $value Value to set for the serviceId property.
    */
    public function setServiceId(?string $value): void {
        $this->getBackingStore()->set('serviceId', $value);
    }

    /**
     * Sets the signInSuccessRate property value. Number of successful / (number of successful + number of failed sign ins) on Active Directory Federation Service in the period specified.
     * @param float|null $value Value to set for the signInSuccessRate property.
    */
    public function setSignInSuccessRate(?float $value): void {
        $this->getBackingStore()->set('signInSuccessRate', $value);
    }

    /**
     * Sets the successfulSignInCount property value. Number of successful sign ins on Active Directory Federation Service.
     * @param int|null $value Value to set for the successfulSignInCount property.
    */
    public function setSuccessfulSignInCount(?int $value): void {
        $this->getBackingStore()->set('successfulSignInCount', $value);
    }

    /**
     * Sets the totalSignInCount property value. Number of successful + failed sign ins failed sign ins on Active Directory Federation Service in the period specified.
     * @param int|null $value Value to set for the totalSignInCount property.
    */
    public function setTotalSignInCount(?int $value): void {
        $this->getBackingStore()->set('totalSignInCount', $value);
    }

    /**
     * Sets the uniqueUserCount property value. Number of unique users that have signed into the application.
     * @param int|null $value Value to set for the uniqueUserCount property.
    */
    public function setUniqueUserCount(?int $value): void {
        $this->getBackingStore()->set('uniqueUserCount', $value);
    }

}
