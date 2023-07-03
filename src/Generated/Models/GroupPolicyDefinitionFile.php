<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class GroupPolicyDefinitionFile extends Entity implements Parsable 
{
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
        $val = $this->getBackingStore()->get('definitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GroupPolicyDefinition::class);
            /** @var array<GroupPolicyDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'definitions'");
    }

    /**
     * Gets the description property value. The localized description of the policy settings in the ADMX file. The default value is empty.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The localized friendly name of the ADMX file.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'definitions' => fn(ParseNode $n) => $o->setDefinitions($n->getCollectionOfObjectValues([GroupPolicyDefinition::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'languageCodes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setLanguageCodes($val);
            },
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'policyType' => fn(ParseNode $n) => $o->setPolicyType($n->getEnumValue(GroupPolicyType::class)),
            'revision' => fn(ParseNode $n) => $o->setRevision($n->getStringValue()),
            'targetNamespace' => fn(ParseNode $n) => $o->setTargetNamespace($n->getStringValue()),
            'targetPrefix' => fn(ParseNode $n) => $o->setTargetPrefix($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fileName property value. The file name of the ADMX file without the path. For example: edge.admx
     * @return string|null
    */
    public function getFileName(): ?string {
        $val = $this->getBackingStore()->get('fileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileName'");
    }

    /**
     * Gets the languageCodes property value. The supported language codes for the ADMX file.
     * @return array<string>|null
    */
    public function getLanguageCodes(): ?array {
        $val = $this->getBackingStore()->get('languageCodes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'languageCodes'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the entity was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the policyType property value. Type of Group Policy File or Definition.
     * @return GroupPolicyType|null
    */
    public function getPolicyType(): ?GroupPolicyType {
        $val = $this->getBackingStore()->get('policyType');
        if (is_null($val) || $val instanceof GroupPolicyType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyType'");
    }

    /**
     * Gets the revision property value. The revision version associated with the file.
     * @return string|null
    */
    public function getRevision(): ?string {
        $val = $this->getBackingStore()->get('revision');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'revision'");
    }

    /**
     * Gets the targetNamespace property value. Specifies the URI used to identify the namespace within the ADMX file.
     * @return string|null
    */
    public function getTargetNamespace(): ?string {
        $val = $this->getBackingStore()->get('targetNamespace');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetNamespace'");
    }

    /**
     * Gets the targetPrefix property value. Specifies the logical name that refers to the namespace within the ADMX file.
     * @return string|null
    */
    public function getTargetPrefix(): ?string {
        $val = $this->getBackingStore()->get('targetPrefix');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetPrefix'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('definitions', $this->getDefinitions());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('fileName', $this->getFileName());
        $writer->writeCollectionOfPrimitiveValues('languageCodes', $this->getLanguageCodes());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeEnumValue('policyType', $this->getPolicyType());
        $writer->writeStringValue('revision', $this->getRevision());
        $writer->writeStringValue('targetNamespace', $this->getTargetNamespace());
        $writer->writeStringValue('targetPrefix', $this->getTargetPrefix());
    }

    /**
     * Sets the definitions property value. The group policy definitions associated with the file.
     * @param array<GroupPolicyDefinition>|null $value Value to set for the definitions property.
    */
    public function setDefinitions(?array $value): void {
        $this->getBackingStore()->set('definitions', $value);
    }

    /**
     * Sets the description property value. The localized description of the policy settings in the ADMX file. The default value is empty.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The localized friendly name of the ADMX file.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the fileName property value. The file name of the ADMX file without the path. For example: edge.admx
     * @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value): void {
        $this->getBackingStore()->set('fileName', $value);
    }

    /**
     * Sets the languageCodes property value. The supported language codes for the ADMX file.
     * @param array<string>|null $value Value to set for the languageCodes property.
    */
    public function setLanguageCodes(?array $value): void {
        $this->getBackingStore()->set('languageCodes', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the entity was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the policyType property value. Type of Group Policy File or Definition.
     * @param GroupPolicyType|null $value Value to set for the policyType property.
    */
    public function setPolicyType(?GroupPolicyType $value): void {
        $this->getBackingStore()->set('policyType', $value);
    }

    /**
     * Sets the revision property value. The revision version associated with the file.
     * @param string|null $value Value to set for the revision property.
    */
    public function setRevision(?string $value): void {
        $this->getBackingStore()->set('revision', $value);
    }

    /**
     * Sets the targetNamespace property value. Specifies the URI used to identify the namespace within the ADMX file.
     * @param string|null $value Value to set for the targetNamespace property.
    */
    public function setTargetNamespace(?string $value): void {
        $this->getBackingStore()->set('targetNamespace', $value);
    }

    /**
     * Sets the targetPrefix property value. Specifies the logical name that refers to the namespace within the ADMX file.
     * @param string|null $value Value to set for the targetPrefix property.
    */
    public function setTargetPrefix(?string $value): void {
        $this->getBackingStore()->set('targetPrefix', $value);
    }

}
