<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The Group Policy Object file uploaded by admin.
*/
class GroupPolicyObjectFile extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new groupPolicyObjectFile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyObjectFile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyObjectFile {
        return new GroupPolicyObjectFile();
    }

    /**
     * Gets the content property value. The Group Policy Object file content.
     * @return string|null
    */
    public function getContent(): ?string {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * Gets the createdDateTime property value. The date and time at which the GroupPolicy was first uploaded.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'groupPolicyObjectId' => fn(ParseNode $n) => $o->setGroupPolicyObjectId($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'ouDistinguishedName' => fn(ParseNode $n) => $o->setOuDistinguishedName($n->getStringValue()),
            'roleScopeTagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoleScopeTagIds($val);
            },
        ]);
    }

    /**
     * Gets the groupPolicyObjectId property value. The Group Policy Object GUID from GPO Xml content
     * @return string|null
    */
    public function getGroupPolicyObjectId(): ?string {
        $val = $this->getBackingStore()->get('groupPolicyObjectId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupPolicyObjectId'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time at which the GroupPolicyObjectFile was last modified.
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
     * Gets the ouDistinguishedName property value. The distinguished name of the OU.
     * @return string|null
    */
    public function getOuDistinguishedName(): ?string {
        $val = $this->getBackingStore()->get('ouDistinguishedName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ouDistinguishedName'");
    }

    /**
     * Gets the roleScopeTagIds property value. The list of scope tags for the configuration.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        $val = $this->getBackingStore()->get('roleScopeTagIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleScopeTagIds'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('content', $this->getContent());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('groupPolicyObjectId', $this->getGroupPolicyObjectId());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('ouDistinguishedName', $this->getOuDistinguishedName());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
    }

    /**
     * Sets the content property value. The Group Policy Object file content.
     * @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time at which the GroupPolicy was first uploaded.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the groupPolicyObjectId property value. The Group Policy Object GUID from GPO Xml content
     * @param string|null $value Value to set for the groupPolicyObjectId property.
    */
    public function setGroupPolicyObjectId(?string $value): void {
        $this->getBackingStore()->set('groupPolicyObjectId', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time at which the GroupPolicyObjectFile was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the ouDistinguishedName property value. The distinguished name of the OU.
     * @param string|null $value Value to set for the ouDistinguishedName property.
    */
    public function setOuDistinguishedName(?string $value): void {
        $this->getBackingStore()->set('ouDistinguishedName', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. The list of scope tags for the configuration.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

}
