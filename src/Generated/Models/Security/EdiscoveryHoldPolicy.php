<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EdiscoveryHoldPolicy extends PolicyBase implements Parsable 
{
    /**
     * @var string|null $contentQuery KQL query that specifies content to be held in the specified locations. To learn more, see Keyword queries and search conditions for Content Search and eDiscovery.  To hold all content in the specified locations, leave contentQuery blank.
    */
    private ?string $contentQuery = null;
    
    /**
     * @var array<string>|null $errors Lists any errors that happened while placing the hold.
    */
    private ?array $errors = null;
    
    /**
     * @var bool|null $isEnabled Indicates whether the hold is enabled and actively holding content.
    */
    private ?bool $isEnabled = null;
    
    /**
     * @var array<SiteSource>|null $siteSources Data sources that represent SharePoint sites.
    */
    private ?array $siteSources = null;
    
    /**
     * @var array<UserSource>|null $userSources Data sources that represent Exchange mailboxes.
    */
    private ?array $userSources = null;
    
    /**
     * Instantiates a new EdiscoveryHoldPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.ediscoveryHoldPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdiscoveryHoldPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdiscoveryHoldPolicy {
        return new EdiscoveryHoldPolicy();
    }

    /**
     * Gets the contentQuery property value. KQL query that specifies content to be held in the specified locations. To learn more, see Keyword queries and search conditions for Content Search and eDiscovery.  To hold all content in the specified locations, leave contentQuery blank.
     * @return string|null
    */
    public function getContentQuery(): ?string {
        return $this->contentQuery;
    }

    /**
     * Gets the errors property value. Lists any errors that happened while placing the hold.
     * @return array<string>|null
    */
    public function getErrors(): ?array {
        return $this->errors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contentQuery' => function (ParseNode $n) use ($o) { $o->setContentQuery($n->getStringValue()); },
            'errors' => function (ParseNode $n) use ($o) { $o->setErrors($n->getCollectionOfPrimitiveValues()); },
            'isEnabled' => function (ParseNode $n) use ($o) { $o->setIsEnabled($n->getBooleanValue()); },
            'siteSources' => function (ParseNode $n) use ($o) { $o->setSiteSources($n->getCollectionOfObjectValues(array(SiteSource::class, 'createFromDiscriminatorValue'))); },
            'userSources' => function (ParseNode $n) use ($o) { $o->setUserSources($n->getCollectionOfObjectValues(array(UserSource::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the isEnabled property value. Indicates whether the hold is enabled and actively holding content.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the siteSources property value. Data sources that represent SharePoint sites.
     * @return array<SiteSource>|null
    */
    public function getSiteSources(): ?array {
        return $this->siteSources;
    }

    /**
     * Gets the userSources property value. Data sources that represent Exchange mailboxes.
     * @return array<UserSource>|null
    */
    public function getUserSources(): ?array {
        return $this->userSources;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('contentQuery', $this->contentQuery);
        $writer->writeCollectionOfPrimitiveValues('errors', $this->errors);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeCollectionOfObjectValues('siteSources', $this->siteSources);
        $writer->writeCollectionOfObjectValues('userSources', $this->userSources);
    }

    /**
     * Sets the contentQuery property value. KQL query that specifies content to be held in the specified locations. To learn more, see Keyword queries and search conditions for Content Search and eDiscovery.  To hold all content in the specified locations, leave contentQuery blank.
     *  @param string|null $value Value to set for the contentQuery property.
    */
    public function setContentQuery(?string $value ): void {
        $this->contentQuery = $value;
    }

    /**
     * Sets the errors property value. Lists any errors that happened while placing the hold.
     *  @param array<string>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value ): void {
        $this->errors = $value;
    }

    /**
     * Sets the isEnabled property value. Indicates whether the hold is enabled and actively holding content.
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the siteSources property value. Data sources that represent SharePoint sites.
     *  @param array<SiteSource>|null $value Value to set for the siteSources property.
    */
    public function setSiteSources(?array $value ): void {
        $this->siteSources = $value;
    }

    /**
     * Sets the userSources property value. Data sources that represent Exchange mailboxes.
     *  @param array<UserSource>|null $value Value to set for the userSources property.
    */
    public function setUserSources(?array $value ): void {
        $this->userSources = $value;
    }

}
