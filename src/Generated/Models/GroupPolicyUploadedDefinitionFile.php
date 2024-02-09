<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

/**
 * The entity represents an ADMX (Administrative Template) XML file uploaded by Administrator. The ADMX file contains a collection of group policy definitions and their locations by category path. The group policy definition file also contains the languages supported as determined by the language dependent ADML (Administrative Template) language files.
*/
class GroupPolicyUploadedDefinitionFile extends GroupPolicyDefinitionFile implements Parsable 
{
    /**
     * Instantiates a new GroupPolicyUploadedDefinitionFile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.groupPolicyUploadedDefinitionFile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyUploadedDefinitionFile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyUploadedDefinitionFile {
        return new GroupPolicyUploadedDefinitionFile();
    }

    /**
     * Gets the content property value. The contents of the uploaded ADMX file.
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * Gets the defaultLanguageCode property value. The default language of the uploaded ADMX file.
     * @return string|null
    */
    public function getDefaultLanguageCode(): ?string {
        $val = $this->getBackingStore()->get('defaultLanguageCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultLanguageCode'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getBinaryContent()),
            'defaultLanguageCode' => fn(ParseNode $n) => $o->setDefaultLanguageCode($n->getStringValue()),
            'groupPolicyOperations' => fn(ParseNode $n) => $o->setGroupPolicyOperations($n->getCollectionOfObjectValues([GroupPolicyOperation::class, 'createFromDiscriminatorValue'])),
            'groupPolicyUploadedLanguageFiles' => fn(ParseNode $n) => $o->setGroupPolicyUploadedLanguageFiles($n->getCollectionOfObjectValues([GroupPolicyUploadedLanguageFile::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(GroupPolicyUploadedDefinitionFileStatus::class)),
            'uploadDateTime' => fn(ParseNode $n) => $o->setUploadDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the groupPolicyOperations property value. The list of operations on the uploaded ADMX file.
     * @return array<GroupPolicyOperation>|null
    */
    public function getGroupPolicyOperations(): ?array {
        $val = $this->getBackingStore()->get('groupPolicyOperations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GroupPolicyOperation::class);
            /** @var array<GroupPolicyOperation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupPolicyOperations'");
    }

    /**
     * Gets the groupPolicyUploadedLanguageFiles property value. The list of ADML files associated with the uploaded ADMX file.
     * @return array<GroupPolicyUploadedLanguageFile>|null
    */
    public function getGroupPolicyUploadedLanguageFiles(): ?array {
        $val = $this->getBackingStore()->get('groupPolicyUploadedLanguageFiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GroupPolicyUploadedLanguageFile::class);
            /** @var array<GroupPolicyUploadedLanguageFile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupPolicyUploadedLanguageFiles'");
    }

    /**
     * Gets the status property value. Type of Group Policy uploaded definition file status.
     * @return GroupPolicyUploadedDefinitionFileStatus|null
    */
    public function getStatus(): ?GroupPolicyUploadedDefinitionFileStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof GroupPolicyUploadedDefinitionFileStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the uploadDateTime property value. The uploaded time of the uploaded ADMX file.
     * @return DateTime|null
    */
    public function getUploadDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('uploadDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uploadDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('content', $this->getContent());
        $writer->writeStringValue('defaultLanguageCode', $this->getDefaultLanguageCode());
        $writer->writeCollectionOfObjectValues('groupPolicyOperations', $this->getGroupPolicyOperations());
        $writer->writeCollectionOfObjectValues('groupPolicyUploadedLanguageFiles', $this->getGroupPolicyUploadedLanguageFiles());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeDateTimeValue('uploadDateTime', $this->getUploadDateTime());
    }

    /**
     * Sets the content property value. The contents of the uploaded ADMX file.
     * @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the defaultLanguageCode property value. The default language of the uploaded ADMX file.
     * @param string|null $value Value to set for the defaultLanguageCode property.
    */
    public function setDefaultLanguageCode(?string $value): void {
        $this->getBackingStore()->set('defaultLanguageCode', $value);
    }

    /**
     * Sets the groupPolicyOperations property value. The list of operations on the uploaded ADMX file.
     * @param array<GroupPolicyOperation>|null $value Value to set for the groupPolicyOperations property.
    */
    public function setGroupPolicyOperations(?array $value): void {
        $this->getBackingStore()->set('groupPolicyOperations', $value);
    }

    /**
     * Sets the groupPolicyUploadedLanguageFiles property value. The list of ADML files associated with the uploaded ADMX file.
     * @param array<GroupPolicyUploadedLanguageFile>|null $value Value to set for the groupPolicyUploadedLanguageFiles property.
    */
    public function setGroupPolicyUploadedLanguageFiles(?array $value): void {
        $this->getBackingStore()->set('groupPolicyUploadedLanguageFiles', $value);
    }

    /**
     * Sets the status property value. Type of Group Policy uploaded definition file status.
     * @param GroupPolicyUploadedDefinitionFileStatus|null $value Value to set for the status property.
    */
    public function setStatus(?GroupPolicyUploadedDefinitionFileStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the uploadDateTime property value. The uploaded time of the uploaded ADMX file.
     * @param DateTime|null $value Value to set for the uploadDateTime property.
    */
    public function setUploadDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('uploadDateTime', $value);
    }

}
