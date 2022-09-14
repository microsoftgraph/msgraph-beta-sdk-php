<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationStrengthPolicy extends Entity implements Parsable 
{
    /**
     * @var array<string>|null $allowedCombinations The allowedCombinations property
    */
    private ?array $allowedCombinations = null;
    
    /**
     * @var array<AuthenticationCombinationConfiguration>|null $combinationConfigurations The combinationConfigurations property
    */
    private ?array $combinationConfigurations = null;
    
    /**
     * @var DateTime|null $createdDateTime The createdDateTime property
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $modifiedDateTime The modifiedDateTime property
    */
    private ?DateTime $modifiedDateTime = null;
    
    /**
     * @var AuthenticationStrengthPolicyType|null $policyType The policyType property
    */
    private ?AuthenticationStrengthPolicyType $policyType = null;
    
    /**
     * @var AuthenticationStrengthRequirements|null $requirementsSatisfied The requirementsSatisfied property
    */
    private ?AuthenticationStrengthRequirements $requirementsSatisfied = null;
    
    /**
     * Instantiates a new AuthenticationStrengthPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.authenticationStrengthPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationStrengthPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationStrengthPolicy {
        return new AuthenticationStrengthPolicy();
    }

    /**
     * Gets the allowedCombinations property value. The allowedCombinations property
     * @return array<string>|null
    */
    public function getAllowedCombinations(): ?array {
        return $this->allowedCombinations;
    }

    /**
     * Gets the combinationConfigurations property value. The combinationConfigurations property
     * @return array<AuthenticationCombinationConfiguration>|null
    */
    public function getCombinationConfigurations(): ?array {
        return $this->combinationConfigurations;
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The displayName property
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedCombinations' => function (ParseNode $n) use ($o) { $o->setAllowedCombinations($n->getCollectionOfPrimitiveValues()); },
            'combinationConfigurations' => function (ParseNode $n) use ($o) { $o->setCombinationConfigurations($n->getCollectionOfObjectValues(array(AuthenticationCombinationConfiguration::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'modifiedDateTime' => function (ParseNode $n) use ($o) { $o->setModifiedDateTime($n->getDateTimeValue()); },
            'policyType' => function (ParseNode $n) use ($o) { $o->setPolicyType($n->getEnumValue(AuthenticationStrengthPolicyType::class)); },
            'requirementsSatisfied' => function (ParseNode $n) use ($o) { $o->setRequirementsSatisfied($n->getEnumValue(AuthenticationStrengthRequirements::class)); },
        ]);
    }

    /**
     * Gets the modifiedDateTime property value. The modifiedDateTime property
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->modifiedDateTime;
    }

    /**
     * Gets the policyType property value. The policyType property
     * @return AuthenticationStrengthPolicyType|null
    */
    public function getPolicyType(): ?AuthenticationStrengthPolicyType {
        return $this->policyType;
    }

    /**
     * Gets the requirementsSatisfied property value. The requirementsSatisfied property
     * @return AuthenticationStrengthRequirements|null
    */
    public function getRequirementsSatisfied(): ?AuthenticationStrengthRequirements {
        return $this->requirementsSatisfied;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('allowedCombinations', $this->allowedCombinations);
        $writer->writeCollectionOfObjectValues('combinationConfigurations', $this->combinationConfigurations);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('modifiedDateTime', $this->modifiedDateTime);
        $writer->writeEnumValue('policyType', $this->policyType);
        $writer->writeEnumValue('requirementsSatisfied', $this->requirementsSatisfied);
    }

    /**
     * Sets the allowedCombinations property value. The allowedCombinations property
     *  @param array<string>|null $value Value to set for the allowedCombinations property.
    */
    public function setAllowedCombinations(?array $value ): void {
        $this->allowedCombinations = $value;
    }

    /**
     * Sets the combinationConfigurations property value. The combinationConfigurations property
     *  @param array<AuthenticationCombinationConfiguration>|null $value Value to set for the combinationConfigurations property.
    */
    public function setCombinationConfigurations(?array $value ): void {
        $this->combinationConfigurations = $value;
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the modifiedDateTime property value. The modifiedDateTime property
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value ): void {
        $this->modifiedDateTime = $value;
    }

    /**
     * Sets the policyType property value. The policyType property
     *  @param AuthenticationStrengthPolicyType|null $value Value to set for the policyType property.
    */
    public function setPolicyType(?AuthenticationStrengthPolicyType $value ): void {
        $this->policyType = $value;
    }

    /**
     * Sets the requirementsSatisfied property value. The requirementsSatisfied property
     *  @param AuthenticationStrengthRequirements|null $value Value to set for the requirementsSatisfied property.
    */
    public function setRequirementsSatisfied(?AuthenticationStrengthRequirements $value ): void {
        $this->requirementsSatisfied = $value;
    }

}
