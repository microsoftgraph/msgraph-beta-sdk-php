<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupPolicyDefinitionFile extends Entity implements Parsable 
{
    /**
     * @var array<GroupPolicyDefinition>|null $definitions The group policy definitions associated with the file.
    */
    private ?array $definitions = null;
    
    /**
     * @var string|null $description The localized description of the policy settings in the ADMX file. The default value is empty.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The localized friendly name of the ADMX file.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $fileName The file name of the ADMX file without the path. For example: edge.admx
    */
    private ?string $fileName = null;
    
    /**
     * @var array<string>|null $languageCodes The supported language codes for the ADMX file.
    */
    private ?array $languageCodes = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date and time the entity was last modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var GroupPolicyType|null $policyType Specifies the type of group policy. Possible values are: admxBacked, admxIngested.
    */
    private ?GroupPolicyType $policyType = null;
    
    /**
     * @var string|null $revision The revision version associated with the file.
    */
    private ?string $revision = null;
    
    /**
     * @var string|null $targetNamespace Specifies the URI used to identify the namespace within the ADMX file.
    */
    private ?string $targetNamespace = null;
    
    /**
     * @var string|null $targetPrefix Specifies the logical name that refers to the namespace within the ADMX file.
    */
    private ?string $targetPrefix = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new groupPolicyDefinitionFile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyDefinitionFile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyDefinitionFile {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.groupPolicyUploadedDefinitionFile': return new GroupPolicyUploadedDefinitionFile();
            }
        }
        return new GroupPolicyDefinitionFile();
    }

    /**
     * Gets the definitions property value. The group policy definitions associated with the file.
     * @return array<GroupPolicyDefinition>|null
    */
    public function getDefinitions(): ?array {
        return $this->definitions;
    }

    /**
     * Gets the description property value. The localized description of the policy settings in the ADMX file. The default value is empty.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The localized friendly name of the ADMX file.
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
            'definitions' => function (ParseNode $n) use ($o) { $o->setDefinitions($n->getCollectionOfObjectValues(array(GroupPolicyDefinition::class, 'createFromDiscriminatorValue'))); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'fileName' => function (ParseNode $n) use ($o) { $o->setFileName($n->getStringValue()); },
            'languageCodes' => function (ParseNode $n) use ($o) { $o->setLanguageCodes($n->getCollectionOfPrimitiveValues()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'policyType' => function (ParseNode $n) use ($o) { $o->setPolicyType($n->getEnumValue(GroupPolicyType::class)); },
            'revision' => function (ParseNode $n) use ($o) { $o->setRevision($n->getStringValue()); },
            'targetNamespace' => function (ParseNode $n) use ($o) { $o->setTargetNamespace($n->getStringValue()); },
            'targetPrefix' => function (ParseNode $n) use ($o) { $o->setTargetPrefix($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdatatype($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the fileName property value. The file name of the ADMX file without the path. For example: edge.admx
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->fileName;
    }

    /**
     * Gets the languageCodes property value. The supported language codes for the ADMX file.
     * @return array<string>|null
    */
    public function getLanguageCodes(): ?array {
        return $this->languageCodes;
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the entity was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the @odata.type property value. The type property
     * @return string|null
    */
    public function getOdatatype(): ?string {
        return $this->type;
    }

    /**
     * Gets the policyType property value. Specifies the type of group policy. Possible values are: admxBacked, admxIngested.
     * @return GroupPolicyType|null
    */
    public function getPolicyType(): ?GroupPolicyType {
        return $this->policyType;
    }

    /**
     * Gets the revision property value. The revision version associated with the file.
     * @return string|null
    */
    public function getRevision(): ?string {
        return $this->revision;
    }

    /**
     * Gets the targetNamespace property value. Specifies the URI used to identify the namespace within the ADMX file.
     * @return string|null
    */
    public function getTargetNamespace(): ?string {
        return $this->targetNamespace;
    }

    /**
     * Gets the targetPrefix property value. Specifies the logical name that refers to the namespace within the ADMX file.
     * @return string|null
    */
    public function getTargetPrefix(): ?string {
        return $this->targetPrefix;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('definitions', $this->definitions);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('fileName', $this->fileName);
        $writer->writeCollectionOfPrimitiveValues('languageCodes', $this->languageCodes);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeEnumValue('policyType', $this->policyType);
        $writer->writeStringValue('revision', $this->revision);
        $writer->writeStringValue('targetNamespace', $this->targetNamespace);
        $writer->writeStringValue('targetPrefix', $this->targetPrefix);
        $writer->writeStringValue('@odata.type', $this->type);
    }

    /**
     * Sets the definitions property value. The group policy definitions associated with the file.
     *  @param array<GroupPolicyDefinition>|null $value Value to set for the definitions property.
    */
    public function setDefinitions(?array $value ): void {
        $this->definitions = $value;
    }

    /**
     * Sets the description property value. The localized description of the policy settings in the ADMX file. The default value is empty.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The localized friendly name of the ADMX file.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the fileName property value. The file name of the ADMX file without the path. For example: edge.admx
     *  @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value ): void {
        $this->fileName = $value;
    }

    /**
     * Sets the languageCodes property value. The supported language codes for the ADMX file.
     *  @param array<string>|null $value Value to set for the languageCodes property.
    */
    public function setLanguageCodes(?array $value ): void {
        $this->languageCodes = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the entity was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the @odata.type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setOdatatype(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the policyType property value. Specifies the type of group policy. Possible values are: admxBacked, admxIngested.
     *  @param GroupPolicyType|null $value Value to set for the policyType property.
    */
    public function setPolicyType(?GroupPolicyType $value ): void {
        $this->policyType = $value;
    }

    /**
     * Sets the revision property value. The revision version associated with the file.
     *  @param string|null $value Value to set for the revision property.
    */
    public function setRevision(?string $value ): void {
        $this->revision = $value;
    }

    /**
     * Sets the targetNamespace property value. Specifies the URI used to identify the namespace within the ADMX file.
     *  @param string|null $value Value to set for the targetNamespace property.
    */
    public function setTargetNamespace(?string $value ): void {
        $this->targetNamespace = $value;
    }

    /**
     * Sets the targetPrefix property value. Specifies the logical name that refers to the namespace within the ADMX file.
     *  @param string|null $value Value to set for the targetPrefix property.
    */
    public function setTargetPrefix(?string $value ): void {
        $this->targetPrefix = $value;
    }

}
