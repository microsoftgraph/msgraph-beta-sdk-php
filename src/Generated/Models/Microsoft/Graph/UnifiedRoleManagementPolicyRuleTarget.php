<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleManagementPolicyRuleTarget implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $caller The caller for the policy rule target. Allowed values are: None, Admin, EndUser. */
    private ?string $caller = null;
    
    /** @var array<string>|null $enforcedSettings The list of settings which are enforced and cannot be overridden by child scopes. Use All for all settings. */
    private ?array $enforcedSettings = null;
    
    /** @var array<string>|null $inheritableSettings The list of settings which can be inherited by child scopes. Use All for all settings. */
    private ?array $inheritableSettings = null;
    
    /** @var string|null $level The level for the policy rule target. Allowed values are: Eligibility, Assignment. */
    private ?string $level = null;
    
    /** @var array<string>|null $operations The operations for policy rule target. Allowed values are: All, Activate, Deactivate, Assign, Update, Remove, Extend, Renew. */
    private ?array $operations = null;
    
    /** @var array<DirectoryObject>|null $targetObjects  */
    private ?array $targetObjects = null;
    
    /**
     * Instantiates a new unifiedRoleManagementPolicyRuleTarget and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleManagementPolicyRuleTarget
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleManagementPolicyRuleTarget {
        return new UnifiedRoleManagementPolicyRuleTarget();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the caller property value. The caller for the policy rule target. Allowed values are: None, Admin, EndUser.
     * @return string|null
    */
    public function getCaller(): ?string {
        return $this->caller;
    }

    /**
     * Gets the enforcedSettings property value. The list of settings which are enforced and cannot be overridden by child scopes. Use All for all settings.
     * @return array<string>|null
    */
    public function getEnforcedSettings(): ?array {
        return $this->enforcedSettings;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'caller' => function (self $o, ParseNode $n) { $o->setCaller($n->getStringValue()); },
            'enforcedSettings' => function (self $o, ParseNode $n) { $o->setEnforcedSettings($n->getCollectionOfPrimitiveValues()); },
            'inheritableSettings' => function (self $o, ParseNode $n) { $o->setInheritableSettings($n->getCollectionOfPrimitiveValues()); },
            'level' => function (self $o, ParseNode $n) { $o->setLevel($n->getStringValue()); },
            'operations' => function (self $o, ParseNode $n) { $o->setOperations($n->getCollectionOfPrimitiveValues()); },
            'targetObjects' => function (self $o, ParseNode $n) { $o->setTargetObjects($n->getCollectionOfObjectValues(DirectoryObject::class)); },
        ];
    }

    /**
     * Gets the inheritableSettings property value. The list of settings which can be inherited by child scopes. Use All for all settings.
     * @return array<string>|null
    */
    public function getInheritableSettings(): ?array {
        return $this->inheritableSettings;
    }

    /**
     * Gets the level property value. The level for the policy rule target. Allowed values are: Eligibility, Assignment.
     * @return string|null
    */
    public function getLevel(): ?string {
        return $this->level;
    }

    /**
     * Gets the operations property value. The operations for policy rule target. Allowed values are: All, Activate, Deactivate, Assign, Update, Remove, Extend, Renew.
     * @return array<string>|null
    */
    public function getOperations(): ?array {
        return $this->operations;
    }

    /**
     * Gets the targetObjects property value. 
     * @return array<DirectoryObject>|null
    */
    public function getTargetObjects(): ?array {
        return $this->targetObjects;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('caller', $this->caller);
        $writer->writeCollectionOfPrimitiveValues('enforcedSettings', $this->enforcedSettings);
        $writer->writeCollectionOfPrimitiveValues('inheritableSettings', $this->inheritableSettings);
        $writer->writeStringValue('level', $this->level);
        $writer->writeCollectionOfPrimitiveValues('operations', $this->operations);
        $writer->writeCollectionOfObjectValues('targetObjects', $this->targetObjects);
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
     * Sets the caller property value. The caller for the policy rule target. Allowed values are: None, Admin, EndUser.
     *  @param string|null $value Value to set for the caller property.
    */
    public function setCaller(?string $value ): void {
        $this->caller = $value;
    }

    /**
     * Sets the enforcedSettings property value. The list of settings which are enforced and cannot be overridden by child scopes. Use All for all settings.
     *  @param array<string>|null $value Value to set for the enforcedSettings property.
    */
    public function setEnforcedSettings(?array $value ): void {
        $this->enforcedSettings = $value;
    }

    /**
     * Sets the inheritableSettings property value. The list of settings which can be inherited by child scopes. Use All for all settings.
     *  @param array<string>|null $value Value to set for the inheritableSettings property.
    */
    public function setInheritableSettings(?array $value ): void {
        $this->inheritableSettings = $value;
    }

    /**
     * Sets the level property value. The level for the policy rule target. Allowed values are: Eligibility, Assignment.
     *  @param string|null $value Value to set for the level property.
    */
    public function setLevel(?string $value ): void {
        $this->level = $value;
    }

    /**
     * Sets the operations property value. The operations for policy rule target. Allowed values are: All, Activate, Deactivate, Assign, Update, Remove, Extend, Renew.
     *  @param array<string>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value ): void {
        $this->operations = $value;
    }

    /**
     * Sets the targetObjects property value. 
     *  @param array<DirectoryObject>|null $value Value to set for the targetObjects property.
    */
    public function setTargetObjects(?array $value ): void {
        $this->targetObjects = $value;
    }

}
