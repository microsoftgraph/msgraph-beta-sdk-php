<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupPolicyObjectFile extends Entity implements Parsable 
{
    /**
     * @var string|null $content The Group Policy Object file content.
    */
    private ?string $content = null;
    
    /**
     * @var DateTime|null $createdDateTime The date and time at which the GroupPolicy was first uploaded.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $groupPolicyObjectId The Group Policy Object GUID from GPO Xml content
    */
    private ?string $groupPolicyObjectId = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date and time at which the GroupPolicyObjectFile was last modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $ouDistinguishedName The distinguished name of the OU.
    */
    private ?string $ouDistinguishedName = null;
    
    /**
     * @var array<string>|null $roleScopeTagIds The list of scope tags for the configuration.
    */
    private ?array $roleScopeTagIds = null;
    
    /**
     * Instantiates a new groupPolicyObjectFile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.groupPolicyObjectFile');
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
        return $this->content;
    }

    /**
     * Gets the createdDateTime property value. The date and time at which the GroupPolicy was first uploaded.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'groupPolicyObjectId' => fn(ParseNode $n) => $o->setGroupPolicyObjectId($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'ouDistinguishedName' => fn(ParseNode $n) => $o->setOuDistinguishedName($n->getStringValue()),
            'roleScopeTagIds' => fn(ParseNode $n) => $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the groupPolicyObjectId property value. The Group Policy Object GUID from GPO Xml content
     * @return string|null
    */
    public function getGroupPolicyObjectId(): ?string {
        return $this->groupPolicyObjectId;
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time at which the GroupPolicyObjectFile was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the ouDistinguishedName property value. The distinguished name of the OU.
     * @return string|null
    */
    public function getOuDistinguishedName(): ?string {
        return $this->ouDistinguishedName;
    }

    /**
     * Gets the roleScopeTagIds property value. The list of scope tags for the configuration.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('content', $this->content);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('groupPolicyObjectId', $this->groupPolicyObjectId);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('ouDistinguishedName', $this->ouDistinguishedName);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
    }

    /**
     * Sets the content property value. The Group Policy Object file content.
     *  @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time at which the GroupPolicy was first uploaded.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the groupPolicyObjectId property value. The Group Policy Object GUID from GPO Xml content
     *  @param string|null $value Value to set for the groupPolicyObjectId property.
    */
    public function setGroupPolicyObjectId(?string $value ): void {
        $this->groupPolicyObjectId = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time at which the GroupPolicyObjectFile was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the ouDistinguishedName property value. The distinguished name of the OU.
     *  @param string|null $value Value to set for the ouDistinguishedName property.
    */
    public function setOuDistinguishedName(?string $value ): void {
        $this->ouDistinguishedName = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. The list of scope tags for the configuration.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

}
