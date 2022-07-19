<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserRegistrationFeatureSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $totalUserCount Total number of users accounts, excluding those that are blocked
    */
    private ?int $totalUserCount = null;
    
    /**
     * @var array<UserRegistrationFeatureCount>|null $userRegistrationFeatureCounts Number of users registered or capable for Multi-Factor Authentication, Self-Service Password Reset and Passwordless Authentication.
    */
    private ?array $userRegistrationFeatureCounts = null;
    
    /**
     * @var IncludedUserRoles|null $userRoles User role type. Possible values are: all, privilegedAdmin, admin, user.
    */
    private ?IncludedUserRoles $userRoles = null;
    
    /**
     * @var IncludedUserTypes|null $userTypes User type. Possible values are: all, member, guest.
    */
    private ?IncludedUserTypes $userTypes = null;
    
    /**
     * Instantiates a new UserRegistrationFeatureSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.userRegistrationFeatureSummary');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserRegistrationFeatureSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserRegistrationFeatureSummary {
        return new UserRegistrationFeatureSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'totalUserCount' => function (ParseNode $n) use ($o) { $o->setTotalUserCount($n->getIntegerValue()); },
            'userRegistrationFeatureCounts' => function (ParseNode $n) use ($o) { $o->setUserRegistrationFeatureCounts($n->getCollectionOfObjectValues(array(UserRegistrationFeatureCount::class, 'createFromDiscriminatorValue'))); },
            'userRoles' => function (ParseNode $n) use ($o) { $o->setUserRoles($n->getEnumValue(IncludedUserRoles::class)); },
            'userTypes' => function (ParseNode $n) use ($o) { $o->setUserTypes($n->getEnumValue(IncludedUserTypes::class)); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the totalUserCount property value. Total number of users accounts, excluding those that are blocked
     * @return int|null
    */
    public function getTotalUserCount(): ?int {
        return $this->totalUserCount;
    }

    /**
     * Gets the userRegistrationFeatureCounts property value. Number of users registered or capable for Multi-Factor Authentication, Self-Service Password Reset and Passwordless Authentication.
     * @return array<UserRegistrationFeatureCount>|null
    */
    public function getUserRegistrationFeatureCounts(): ?array {
        return $this->userRegistrationFeatureCounts;
    }

    /**
     * Gets the userRoles property value. User role type. Possible values are: all, privilegedAdmin, admin, user.
     * @return IncludedUserRoles|null
    */
    public function getUserRoles(): ?IncludedUserRoles {
        return $this->userRoles;
    }

    /**
     * Gets the userTypes property value. User type. Possible values are: all, member, guest.
     * @return IncludedUserTypes|null
    */
    public function getUserTypes(): ?IncludedUserTypes {
        return $this->userTypes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('totalUserCount', $this->totalUserCount);
        $writer->writeCollectionOfObjectValues('userRegistrationFeatureCounts', $this->userRegistrationFeatureCounts);
        $writer->writeEnumValue('userRoles', $this->userRoles);
        $writer->writeEnumValue('userTypes', $this->userTypes);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the totalUserCount property value. Total number of users accounts, excluding those that are blocked
     *  @param int|null $value Value to set for the totalUserCount property.
    */
    public function setTotalUserCount(?int $value ): void {
        $this->totalUserCount = $value;
    }

    /**
     * Sets the userRegistrationFeatureCounts property value. Number of users registered or capable for Multi-Factor Authentication, Self-Service Password Reset and Passwordless Authentication.
     *  @param array<UserRegistrationFeatureCount>|null $value Value to set for the userRegistrationFeatureCounts property.
    */
    public function setUserRegistrationFeatureCounts(?array $value ): void {
        $this->userRegistrationFeatureCounts = $value;
    }

    /**
     * Sets the userRoles property value. User role type. Possible values are: all, privilegedAdmin, admin, user.
     *  @param IncludedUserRoles|null $value Value to set for the userRoles property.
    */
    public function setUserRoles(?IncludedUserRoles $value ): void {
        $this->userRoles = $value;
    }

    /**
     * Sets the userTypes property value. User type. Possible values are: all, member, guest.
     *  @param IncludedUserTypes|null $value Value to set for the userTypes property.
    */
    public function setUserTypes(?IncludedUserTypes $value ): void {
        $this->userTypes = $value;
    }

}
