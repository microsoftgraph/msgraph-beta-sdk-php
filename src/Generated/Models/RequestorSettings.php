<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RequestorSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var bool|null $acceptRequests Indicates whether new requests are accepted on this policy.
    */
    private ?bool $acceptRequests = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<UserSet>|null $allowedRequestors The users who are allowed to request on this policy, which can be singleUser, groupMembers, and connectedOrganizationMembers.
    */
    private ?array $allowedRequestors = null;
    
    /**
     * @var string|null $scopeType Who can request. One of NoSubjects, SpecificDirectorySubjects, SpecificConnectedOrganizationSubjects, AllConfiguredConnectedOrganizationSubjects, AllExistingConnectedOrganizationSubjects, AllExistingDirectoryMemberUsers, AllExistingDirectorySubjects or AllExternalSubjects.
    */
    private ?string $scopeType = null;
    
    /**
     * Instantiates a new requestorSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RequestorSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RequestorSettings {
        return new RequestorSettings();
    }

    /**
     * Gets the acceptRequests property value. Indicates whether new requests are accepted on this policy.
     * @return bool|null
    */
    public function getAcceptRequests(): ?bool {
        return $this->acceptRequests;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowedRequestors property value. The users who are allowed to request on this policy, which can be singleUser, groupMembers, and connectedOrganizationMembers.
     * @return array<UserSet>|null
    */
    public function getAllowedRequestors(): ?array {
        return $this->allowedRequestors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'acceptRequests' => function (ParseNode $n) use ($o) { $o->setAcceptRequests($n->getBooleanValue()); },
            'allowedRequestors' => function (ParseNode $n) use ($o) { $o->setAllowedRequestors($n->getCollectionOfObjectValues(array(UserSet::class, 'createFromDiscriminatorValue'))); },
            'scopeType' => function (ParseNode $n) use ($o) { $o->setScopeType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the scopeType property value. Who can request. One of NoSubjects, SpecificDirectorySubjects, SpecificConnectedOrganizationSubjects, AllConfiguredConnectedOrganizationSubjects, AllExistingConnectedOrganizationSubjects, AllExistingDirectoryMemberUsers, AllExistingDirectorySubjects or AllExternalSubjects.
     * @return string|null
    */
    public function getScopeType(): ?string {
        return $this->scopeType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('acceptRequests', $this->acceptRequests);
        $writer->writeCollectionOfObjectValues('allowedRequestors', $this->allowedRequestors);
        $writer->writeStringValue('scopeType', $this->scopeType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the acceptRequests property value. Indicates whether new requests are accepted on this policy.
     *  @param bool|null $value Value to set for the acceptRequests property.
    */
    public function setAcceptRequests(?bool $value ): void {
        $this->acceptRequests = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the allowedRequestors property value. The users who are allowed to request on this policy, which can be singleUser, groupMembers, and connectedOrganizationMembers.
     *  @param array<UserSet>|null $value Value to set for the allowedRequestors property.
    */
    public function setAllowedRequestors(?array $value ): void {
        $this->allowedRequestors = $value;
    }

    /**
     * Sets the scopeType property value. Who can request. One of NoSubjects, SpecificDirectorySubjects, SpecificConnectedOrganizationSubjects, AllConfiguredConnectedOrganizationSubjects, AllExistingConnectedOrganizationSubjects, AllExistingDirectoryMemberUsers, AllExistingDirectorySubjects or AllExternalSubjects.
     *  @param string|null $value Value to set for the scopeType property.
    */
    public function setScopeType(?string $value ): void {
        $this->scopeType = $value;
    }

}
