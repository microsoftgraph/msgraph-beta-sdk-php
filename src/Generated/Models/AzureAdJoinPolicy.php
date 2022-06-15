<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AzureAdJoinPolicy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $allowedGroups The identifiers of the groups that are in the scope of the policy. Required when the appliesTo property is set to selected.
    */
    private ?array $allowedGroups = null;
    
    /**
     * @var array<string>|null $allowedUsers The identifiers of users that are in the scope of the policy. Required when the appliesTo property is set to selected.
    */
    private ?array $allowedUsers = null;
    
    /**
     * @var PolicyScope|null $appliesTo Specifies whether to block or allow fine-grained control of the policy scope. The possible values are: 0 (meaning none), 1 (meaning all), 2 (meaning selected), 3 (meaning unknownFutureValue). The default value is 1. When set to 2, at least one user or group identifier must be specified in either allowedUsers or allowedGroups.  Setting this property to 0 or 1 removes all identifiers in both allowedUsers and allowedGroups.
    */
    private ?PolicyScope $appliesTo = null;
    
    /**
     * @var bool|null $isAdminConfigurable Specifies whether this policy scope is configurable by the admin. The default value is false. When an admin has enabled Intune (MEM) to manage devices, this property is set to false and appliesTo defaults to 1 (meaning all).
    */
    private ?bool $isAdminConfigurable = null;
    
    /**
     * Instantiates a new azureAdJoinPolicy and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AzureAdJoinPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AzureAdJoinPolicy {
        return new AzureAdJoinPolicy();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowedGroups property value. The identifiers of the groups that are in the scope of the policy. Required when the appliesTo property is set to selected.
     * @return array<string>|null
    */
    public function getAllowedGroups(): ?array {
        return $this->allowedGroups;
    }

    /**
     * Gets the allowedUsers property value. The identifiers of users that are in the scope of the policy. Required when the appliesTo property is set to selected.
     * @return array<string>|null
    */
    public function getAllowedUsers(): ?array {
        return $this->allowedUsers;
    }

    /**
     * Gets the appliesTo property value. Specifies whether to block or allow fine-grained control of the policy scope. The possible values are: 0 (meaning none), 1 (meaning all), 2 (meaning selected), 3 (meaning unknownFutureValue). The default value is 1. When set to 2, at least one user or group identifier must be specified in either allowedUsers or allowedGroups.  Setting this property to 0 or 1 removes all identifiers in both allowedUsers and allowedGroups.
     * @return PolicyScope|null
    */
    public function getAppliesTo(): ?PolicyScope {
        return $this->appliesTo;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowedGroups' => function (ParseNode $n) use ($o) { $o->setAllowedGroups($n->getCollectionOfPrimitiveValues()); },
            'allowedUsers' => function (ParseNode $n) use ($o) { $o->setAllowedUsers($n->getCollectionOfPrimitiveValues()); },
            'appliesTo' => function (ParseNode $n) use ($o) { $o->setAppliesTo($n->getEnumValue(PolicyScope::class)); },
            'isAdminConfigurable' => function (ParseNode $n) use ($o) { $o->setIsAdminConfigurable($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the isAdminConfigurable property value. Specifies whether this policy scope is configurable by the admin. The default value is false. When an admin has enabled Intune (MEM) to manage devices, this property is set to false and appliesTo defaults to 1 (meaning all).
     * @return bool|null
    */
    public function getIsAdminConfigurable(): ?bool {
        return $this->isAdminConfigurable;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('allowedGroups', $this->allowedGroups);
        $writer->writeCollectionOfPrimitiveValues('allowedUsers', $this->allowedUsers);
        $writer->writeEnumValue('appliesTo', $this->appliesTo);
        $writer->writeBooleanValue('isAdminConfigurable', $this->isAdminConfigurable);
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
     * Sets the allowedGroups property value. The identifiers of the groups that are in the scope of the policy. Required when the appliesTo property is set to selected.
     *  @param array<string>|null $value Value to set for the allowedGroups property.
    */
    public function setAllowedGroups(?array $value ): void {
        $this->allowedGroups = $value;
    }

    /**
     * Sets the allowedUsers property value. The identifiers of users that are in the scope of the policy. Required when the appliesTo property is set to selected.
     *  @param array<string>|null $value Value to set for the allowedUsers property.
    */
    public function setAllowedUsers(?array $value ): void {
        $this->allowedUsers = $value;
    }

    /**
     * Sets the appliesTo property value. Specifies whether to block or allow fine-grained control of the policy scope. The possible values are: 0 (meaning none), 1 (meaning all), 2 (meaning selected), 3 (meaning unknownFutureValue). The default value is 1. When set to 2, at least one user or group identifier must be specified in either allowedUsers or allowedGroups.  Setting this property to 0 or 1 removes all identifiers in both allowedUsers and allowedGroups.
     *  @param PolicyScope|null $value Value to set for the appliesTo property.
    */
    public function setAppliesTo(?PolicyScope $value ): void {
        $this->appliesTo = $value;
    }

    /**
     * Sets the isAdminConfigurable property value. Specifies whether this policy scope is configurable by the admin. The default value is false. When an admin has enabled Intune (MEM) to manage devices, this property is set to false and appliesTo defaults to 1 (meaning all).
     *  @param bool|null $value Value to set for the isAdminConfigurable property.
    */
    public function setIsAdminConfigurable(?bool $value ): void {
        $this->isAdminConfigurable = $value;
    }

}
